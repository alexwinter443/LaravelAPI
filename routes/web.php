<?php

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
    return view('welcome');
});


Route::get('/hello', function(){
        return view('HelloWorld');
});


Route::get('/products', 'UsersRestController@index');
Route::post('/products/{name}/{description}', 'UsersRestController@addProduct1');
Route::put('products/update/{id}/{name}/{description}', 'UsersRestController@updateProduct');
Route::delete('/products/delete/{id}', 'UsersRestController@deleteProduct');



Route::get('/products/{id}', 'UsersRestController@showProduct');
Route::get('/products/{id}/{name}', 'UsersRestController@showProductname');
