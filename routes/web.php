<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\shopieeController;
use App\Http\Controllers\userController;
use App\Http\Livewire\LoadMoreProducts;
// use App\Http\Livewire\LoadMoreProducts;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified']);


Route::get('/', [shopieeController::class, 'products']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);



// logout route
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


// products routes

Route::get('/products', [productController::class, 'index'])->name('index.products');
Route::get('/product/{id}', [productController::class, 'find'])->name('find.products');
Route::get('/delete/{id}', [productController::class, 'delete'])->name('delete.products');
Route::get('/create', [productController::class, 'create'])->name('create.products');
Route::post('/store', [productController::class, 'store'])->name('store.products');
Route::get('/update/{id}', [productController::class, 'update'])->name('update.products');
Route::put('/edit/{id}', [productController::class, 'edit'])->name('edit.products');


// categorys-routes
route::get('/categorys', [categoryController::class, 'index'])->name('index.category');

route::get('/category/{id}', [categoryController::class, 'find'])->name('find-category');

route::get('/delete-category/{id}', [categoryController::class, 'delete'])->name('delete.category');

route::get('/creat-category', [categoryController::class, 'create'])->name('create.category');

route::post('/store-category', [categoryController::class, 'store'])->name('store.category');

route::get('update-category/{id}', [categoryController::class, 'update'])->name('update.category');

route::put('/edit-category/{id}', [categoryController::class, 'edit'])->name('edit.category');

// users-routes
route::get('/users', [userController::class, 'index'])->name('index.user');

route::get('/user/{id}', [userController::class, 'find'])->name('find.user');

route::get('/delete-user/{id}', [userController::class, 'delete'])->name('delete.user');

route::get('/create-user', [userController::class, 'create'])->name('create.user');

route::post('/store-user', [userController::class, 'store'])->name('store.user');

route::get('/update-user/{id}', [userController::class, 'update'])->name('update.user');

route::put('/edit-user/{id}', [userController::class, 'edit'])->name('edit.user');


// verifiy email
Auth::routes(['verify' => true]);


// Is Admin




Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
});


// shopiee

Route::get('/shopiee', function () {
    return view('shopiee.shopiee');
});

route::get('/shopiee', [HomeController::class, 'shopiee'])->name('shopiee');

// inside view shopiee
route::get('/shopiee', [shopieeController::class, 'categories'])->name('categories.shopiee');
route::get('/shopiee', [shopieeController::class, 'products'])->name('products.shopiee');


// liveWire
Route::get('/index', [HomeController::class, 'index']);
Route::get('/livewire', [HomeController::class, 'livewire']);


// search
route::get('/search', [searchController::class, 'search'])->name('search.shopiee');


// cart
route::get('/add_to_cart/{product}', [cartController::class, 'add'])->name('cart.add')->middleware(['auth']);
route::get('/carts}', [cartController::class, 'carts'])->name('carts')->middleware(['auth']);


// user
route::get('/userprofile', [HomeController::class, 'user'])->name('profile');


// admin access
