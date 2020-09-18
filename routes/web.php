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

Route::get('/login',function (){
    return view('auth.login');
});
Route::get('/loginn',function(){
    return view('user.loginn');
});
Route::get('/user',function(){
    return view('user.index');
});
Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('/edit',function(){
    return view('admin.edit');
});

// Route::get('/form_makanan','MakananController@index');
Route::get('/createmakanan/form','MakananController@create');
Route::post('/createmakanan','MakananController@store');
Route::get('/makanan','MakananController@showw');

Route::get('/edit/{id}','MakananController@edit');
Route::put('/update/{id}','MakananController@update');
Route::get('/hapus/{id}','MakananController@delete_menu');

// user
Route::get('/makanann','MakananController@show');
Route::get('/beli/{id}','MakananController@beli');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
