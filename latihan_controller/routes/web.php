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

Route::get('/', 'viewcontroller@index');
Route::get('/', 'viewcontroller@awal');
Route::get('/', 'viewcontroller@tambah');
Route::get('/', 'viewcontroller@edit');
Route::get('/', 'viewcontroller@simpan');

?>