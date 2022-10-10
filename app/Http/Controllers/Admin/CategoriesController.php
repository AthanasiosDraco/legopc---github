<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoriesController extends Controller
{
    // Show/Read All Categories
    public function index(){
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    
    // Create/Insert Category
    public function store(Request $request){
        
        //Custom message for error
        $message = ['name.unique'=>'This category already exist.'];

        $formFields = $request->validate([
            'name' => ['string', 'max:255', 'unique:categories'],
        ], $message);

        Category::create($formFields);

        // $category = new Category();
        
        // $category->name = $request->input('name');
        // $category->save();

        return redirect('/admin/categories')->with('message','Category added.');
        
    }

    // Edit/Update Category
    public function update(Request $request, $id){
        
        $message = ['name.unique'=>'No changes were made since the category already exist.'];

        $request->validate([
            'name' => ['string', 'max:255', 'unique:categories'],
        ], $message);

        $category = Category::find($id);

        $category->name = $request->input('name');
        $category->update();

        return redirect('/admin/categories')->with('message','Category updated.');
    }

    // Delete Category
    public function destroy($id){       
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/categories')->with('message','Category deleted.');
    }


}
