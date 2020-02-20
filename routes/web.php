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


Route::resource('/', 'MarcaController');

Route::get('/nosotros', function(){
    return view('pages.nosotros');
});

Route::get('/contactanos', function(){
    return view('pages.contactanos');
});
