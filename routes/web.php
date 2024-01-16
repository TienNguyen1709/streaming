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

Route::get('/','App\Http\Controllers\FrontEndController@index');
Route::get('/home','App\Http\Controllers\FrontEndController@index');
Route::get('/detail/{id}','App\Http\Controllers\VideoController@detail_video');
Route::get('/admin', function () {
    return view('admin.includes.master-admin');
});
//Product
Route::get('/admin/list-product','App\Http\Controllers\ProductController@list_product');
Route::get('/admin/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/admin/edit-product','App\Http\Controllers\ProductController@edit_product');
//Category
Route::get('/admin/list-category','App\Http\Controllers\CategoryController@list_category');
Route::get('/admin/add-category','App\Http\Controllers\CategoryController@add_category');
Route::get('/admin/edit-category','App\Http\Controllers\CategoryController@edit_category');
//Video
Route::get('/admin/list-video','App\Http\Controllers\VideoController@list_video');
Route::get('/admin/add-video','App\Http\Controllers\VideoController@add_video');
Route::get('/admin/edit-video','App\Http\Controllers\VideoController@edit_video');
Route::post('/admin/save-video','App\Http\Controllers\VideoController@save_video');
Route::post('/admin/update-video/{id}','App\Http\Controllers\VideoController@update_video');
Route::get('/admin/edit-video/{id}','App\Http\Controllers\VideoController@edit_video');
Route::get('/admin/delete-video/{id}','App\Http\Controllers\VideoController@delete_video');
Route::get('/admin/unactive-video/{id}','App\Http\Controllers\VideoController@unactive_video');
Route::get('/admin/active-video/{id}','App\Http\Controllers\VideoController@active_video');
