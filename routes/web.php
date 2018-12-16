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

Route::post('/admin/delete', 'StaffController@destroy')->name('admin.delete');

Route::patch('/admin/readone/{id}', 'StaffController@update')->name('admin.update');

Route::get('/admin/buat_penayangan/{id}', 'StaffController@createPenayangan')->name('admin.cPenayangan');
Route::post('/admin/buat_penayangan', 'StaffController@storePenayangan')->name('admin.sPenayangan');

Route::get('/admin/transaksi', 'StaffController@transaksi');

Route::get('/', 'UserController@index' )->name('user.index');
Route::get('/film/{id}', 'UserController@show')->name('user.readone');

Route::get('/film/beli/{id}', 'UserController@buy')->name('user.beli');
Route::post('/tayang/{id}', 'UserController@getTayangan');
Route::post('/film/beli', 'UserController@checkout')->name('user.checkout');