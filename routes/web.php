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
    return view('home');
});

Route::get('/routetest', function (){
    return view('test');
});

Route::get('/control','LoginController@contoh');

Route::get('template', function (){
    return view ('adminbsb.master');
});

Route::get('cek', function (){
    return view ('home');
});