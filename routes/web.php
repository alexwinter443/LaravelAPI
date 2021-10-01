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
        return view('helloWorld');
});


Route::get('/products', 'ProductsRestController@index');
Route::post('/products/{name}/{description}', 'ProductsRestController@addProduct1');
Route::put('products/update/{id}/{name}/{description}', 'ProductsRestController@updateProduct');
Route::delete('/products/delete/{id}', 'ProductsRestController@deleteProduct');



Route::get('/products/{id}', 'ProductsRestController@showProduct');
Route::get('/products/{id}/{name}', 'ProductsRestController@showProductname');
