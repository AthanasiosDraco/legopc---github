<?php

namespace App\Http\Controllers\Front;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index() {
        $products = Product::getProducts('','','');
        $brands = Brand::all();
        $categories = Category::all();
        return view('front.shop', compact('products','brands', 'categories'));
    }

    public function getMoreProducts(Request $request) {
        // this vars are from ajax
        $query = $request->search_query;
        $category = $request->category;
        $brand = $request->brand;
        if($request->ajax()) {
            $products = Product::getProducts($query, $category, $brand);
            return view('front.card.single-product', compact('products'))->render();
        }
    }
    
}


// public function index(Request $request) {
//     $query = Product::query();
//     $brands = Brand::all();
//     $categories = Category::all();

//     if($request->ajax()){
//         if(empty($request->category)){
//             $products = $query->get();
//         }
//         else{
//             $products = $query->where(['category_id'=>$request->category])->get();
//         }            
//         return response()->json(['products' => $products]);
//     }
//     $products = $query->paginate(8);
//     return view('front.shop', compact('products','brands', 'categories'));
//     //return view('front.shop');
// }
