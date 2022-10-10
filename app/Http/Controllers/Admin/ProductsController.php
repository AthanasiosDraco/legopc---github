<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    // Show/Read All Products
    public function index() {
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.list', compact('products','brands','categories'));
    }

    // Show Add Form
    public function add() {
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.add', compact('products','brands','categories'));
    }
    
    // Create/Insert Product
    public function store(Request $request) {
        //Custom message for error
        $message = ['name.unique'=>'This product already exist.'];
        $formFields = $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'name' => ['required', 'string', 'max:255', 'unique:products'],   
            'description' => '',
            'price' => 'required',
            'qty' => 'required',
            'meta_keywords' => 'string'
        ], $message);

        

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $formFields['name'].'.'.$ext;
            $file->move('assets/uploads/products/', $filename);
            $formFields['image'] = $filename;
        }
        
        Product::create($formFields);
       
        return redirect('/admin/products')->with('message','Product added.');
        
    }

    // Show Edit Product Form
    public function edit(Product $product) {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.products.edit', compact('product','brands','categories'));
    }

    // Edit/Update Product
    public function update(Request $request, Product $product) {
        //Custom message for error
        $message = ['name.unique'=>'This product already exist.'];
        $formFields = $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'name' => ['required', 'string', 'max:255'],   
            'description' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'meta_keywords' => 'string'
        ], $message);
 
        // For Storing File with custom name
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = $formFields['name'].'.'.$ext;
            $file->move('assets/uploads/products/', $filename);
            $formFields['image'] = $filename;
        }
        
        $product->update($formFields);
       
        return back()->with('message','Product updated.');
        //return redirect('/admin/products')->with('message','Product added.');
        
    }

    // Delete Product
    public function destroy(Product $product){
        // Deleting Product along with its image
        $path = 'assets/uploads/products/'.$product->image;
        if(File::exists($path)){
            File::delete($path);
        }

        $product->delete();
        
        return back()->with('message','Product deleted.');
    }
}
