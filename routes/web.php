<?php



//use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\FrontController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     //return view('front.index');
//     return view('welcome2');
// });

Route::get('/', [FrontController::class, 'index']);

Route::get('/shop', [ShopController::class, 'index']);
Route::get('shop.get-more-products', [ShopController::class, 'getMoreProducts'])->name('shop.get-more-products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
   
    Route::get('/admin/index', function () {
        return view('admin.index');        
     });

    //Categories
    // Show All/Index Categories
    Route::get('/admin/categories', [Admin\CategoriesController::class, 'index']);
    // Store Category Data
    Route::post('/admin/insert-category', [Admin\CategoriesController::class, 'store']);
    // Show Edit Category Form
    //Route::get('/admin/categories/{id}/edit', [Admin\CategoriesController::class, 'edit']);
    // Update Category --form submit
    Route::put('/admin/categories/{id}',  [Admin\CategoriesController::class, 'update']);
    // Delete Category
    Route::delete('/admin/categories/{id}',  [Admin\CategoriesController::class, 'destroy']);
       
    //Brands
    // Show All/Index Brands
    Route::get('/admin/brands', [Admin\BrandsController::class, 'index']);
    // Store Category Data
    Route::post('/admin/insert-brand', [Admin\BrandsController::class, 'store']);
    // Show Edit Category Form
    //Route::get('/admin/Brands/{id}/edit', [Admin\BrandsController::class, 'edit']);
    // Update Category --form submit
    Route::put('/admin/brands/{id}',  [Admin\BrandsController::class, 'update']);
    // Delete Category
    Route::get('/admin/brands/{id}',  [Admin\BrandsController::class, 'destroy']);
    
    //Products
    // Show All/Index Products
    Route::get('/admin/products', [Admin\ProductsController::class, 'index']);
    // Show Product Add Form
    Route::get('/admin/products/add', [Admin\ProductsController::class, 'add']);
    // Store Product Data
    Route::post('/admin/insert-product', [Admin\ProductsController::class, 'store']);
    // Show Edit Product Form
    Route::get('/admin/products/{product}/edit', [Admin\ProductsController::class, 'edit']);
    // Update Product --form submit
    Route::put('/admin/products/{product}',  [Admin\ProductsController::class, 'update']);
    // Delete Product
    Route::get('/admin/products/{product}',  [Admin\ProductsController::class, 'destroy']);
});

