<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    // Show/Read All Categories
    public function index(){
        $brands = Brand::all();
        return view('admin.brands', compact('brands'));
    }
    
    // Create/Insert Brand
    public function store(Request $request){
        
        //Custom message for error
        $message = ['name.unique'=>'This Brand already exist.'];

        $formFields = $request->validate([
            'name' => ['string', 'max:255', 'unique:brands'],
        ], $message);

        Brand::create($formFields);

        // $Brand = new Brand();
        
        // $Brand->name = $request->input('name');
        // $Brand->save();

        return redirect('/admin/brands')->with('message','Brand added.');
        
    }

    // Edit/Update Brand
    public function update(Request $request, $id){
        
        $message = ['name.unique'=>'No changes were made since the brand already exist.'];

        $request->validate([
            'name' => ['string', 'max:255', 'unique:brands'],
        ], $message);

        $brand = Brand::find($id);

        $brand->name = $request->input('name');
        $brand->update();

        return redirect('/admin/brands')->with('message','Brand updated.');
    }

    // Delete Brand
    public function destroy($id){       
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/admin/brands')->with('message','Brand deleted.');
    }
}
