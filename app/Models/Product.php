<?php

namespace App\Models;


use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'image',
        'description',
        'price',
        'qty',
        'meta_keywords',        
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public static function getProducts($search_keyword, $category, $brand) {
        $products = DB::table('products');

        if($search_keyword && !empty($search_keyword)) {
            $products->where(function($q) use ($search_keyword) {
                $q->where('products.name', 'like', "%{$search_keyword}%")
                ->orWhere('products.meta_keywords', 'like', "%{$search_keyword}%");
            });
        }

        if($category && !empty($category)) {
            $products->where(['category_id'=>$category])->get();
        }

        if($brand && !empty($brand)) {
            $products->where(['brand_id'=>$brand])->get();
        }

        return $products->paginate(8);
    }
}
