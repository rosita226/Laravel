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

Route::get('/', function (){
return view ('home');
});
Route::get('/awal', function (){
return view ('awal');
});
Route::get('/simpan', function (){
return view ('simpan');
});
Route::get('/tambah', function (){
return view ('tambah');
});
Route::get('/edit', function (){
return view ('edit');
});