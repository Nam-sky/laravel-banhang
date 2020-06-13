<?php

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
Route::get('/', function(){
    return view('test');
});

Route::get('test', function(){
    return 'Test Route Get';
});

Route::get('users', function(){
    return 'Màn hình User';
})->name('user');

Route::get('news/{id}', function($id) {
    return "Bài viết số ${id}";
});

Route::get('user/{id}', function($id){
    return "User ID: ${id}";
})->name('user.show');

Route::group(['prefix' => 'backend'], function() {
    Route::get('user','Backend\UserController@index') ->name('backend.user');

    Route::get('product','Backend\ProductController@index') ->name('backend.product');

    Route::get('news','Backend\NewsController@index') ->name('backend.news');

    Route::get('category','Backend\CategoryController@index') ->name('backend.category');
});


