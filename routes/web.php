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
Route::resource('ketuas','KetuaController');
Route::resource('anggotas','AnggotaController');
Route::resource('sejarahs','SejarahController');
Route::resource('pembinas','PembinaController');
Route::resource('kegiatans','KegiatanController');
Route::resource('materis','MateriController');
Route::resource('jadsekuls','JadsekulController');
Route::resource('jadlatgabs','JadlatgabController');
Route::resource('perlombaans','PerlombaanController');
Route::resource('fasilitas','FasilitasController');