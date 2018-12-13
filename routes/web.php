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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
    return view('admin.inputfilm');
});

Route::post('/admin/input_film', 'StaffController@store')->name('admin.store');
Route::get('/admin/input_film', 'StaffController@create')->name('admin.create');
Route::get('/admin','StaffController@index')->name('admin.index');

Route::get('/admin/readone/{id}', 'StaffController@show')->name('admin.readone');