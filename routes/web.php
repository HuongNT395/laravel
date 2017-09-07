<?php
use App\Http\Controllers;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',"ProductController@getListProduct")->name("product.list");
Route::get('/add',"ProductController@showAddForm")->name("product.add");
Route::post('/add',"ProductController@addProduct")->name("product.added");
Route::post('/{id}/edit',"ProductController@editProduct")->name("product.edited");
Route::get('/{id}/edit',"ProductController@showEditForm")->name("product.edit");
Route::get('/{id}/delete',"ProductController@deleteProduct")->name("product.delete");
