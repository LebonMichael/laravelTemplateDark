<?php

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

Route::get('/', function () {
    return view('home');

});
Route::resource('/home', \App\Http\Controllers\FrontendHomeController::class);
Route::get('/contactformulier', 'App\Http\Controllers\ContactController@create');
Route::post('/contactformulier', 'App\Http\Controllers\ContactController@store');

Auth::routes(['verify' => true]);



/** BACKEND ROUTES **/
/** Beveiligd alle routes na admin (eerst inloggen en admin zijn) **/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::resource('users', App\Http\Controllers\AdminUsersController::class);
    Route::get('users/restore/{user}','App\Http\Controllers\AdminUsersController@restore')->name('users.restore');
    Route::resource('comments',\App\Http\Controllers\AdminPostCommentsController::class);
    //Route::resource('replies', \App\Http\Controllers\AdminPostCommentRepliesController::class);

});

/** Beveiligd alle routes na admin (eerst inloggen) **/

Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified']], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('homebackend');
    Route::resource('photos', App\Http\Controllers\AdminPhotosController::class);
    //Route::resource('media', App\Http\Controllers\AdminMediasController::class);
    Route::resource('posts', App\Http\Controllers\AdminPostsController::class);
    Route::resource('categories', App\Http\Controllers\AdminPostsCategoriesController::class);
    Route::get('categories/restore/{category}','App\Http\Controllers\AdminPostsCategoriesController@restore')->name('categories.restore');
    Route::resource('products', \App\Http\Controllers\AdminProductsController::class);
    Route::resource('brands', \App\Http\Controllers\AdminBrandsController::class);
    Route::resource('productcategories',\App\Http\Controllers\AdminProductCategoryController::class);
    Route::get('products/brand/{id}','App\Http\Controllers\AdminProductsController@productsPerBrand')->name('productsPerBrand');
});
