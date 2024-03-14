<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::get('/main', 'MainController')->name('main');
    Route::get('/contacts', 'ContactController')->name('contacts');
    Route::get('/about', 'AboutController')->name('about');

    Route::group(['namespace'=>'Products'], function(){
    Route::get('/products', 'ProductController')->name('products');
    Route::get('/products/{product}', 'ShowController')->name('product.show');
    });
});
Route::group(['namespace'=>'App\Http\Controllers\Admin\Products', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::post('products', 'StoreController')->name('admin.product.store');
    Route::get('products', 'ProductController')->name('admin.products.index');
    Route::get('products/create', 'CreateController')->name('admin.product.create');
    Route::get('products/{product}', 'ShowController')->name('admin.product.show');
    Route::delete('products/{product}', 'DestroyController')->name('admin.product.delete');
    Route::get('products/{product}/edit', 'EditController')->name('admin.product.edit');
    Route::patch('posts/{product}', 'UpdateController')->name('admin.product.update');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
