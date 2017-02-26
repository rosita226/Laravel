<?php

use App\mahasiswa;
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
Route::get('/', 'ViewController@index');
Route::get('/tambah', function(){
    $mahasiswa = new mahasiswa;  
    $mahasiswa ->  nama = "dadan ";
    $mahasiswa ->  nim = "14111890";
    $mahasiswa -> alamat = "Bandung";
    $mahasiswa -> save();
});
Route::get('/ubah', function(){
	$mahasiswa = mahasiswa::find(2);    
    $mahasiswa ->  nama = "Sarip";
    $mahasiswa ->  nim = "14111066";
    $mahasiswa -> alamat = "Bogor";
    $mahasiswa -> save();
});
Route::get('/tampil', function()
{
    $mahasiswa = Mahasiswa::all();
    foreach($mahasiswa as $mhs)
    {
       echo "<b>Nama</b> : "; 
       echo $mhs->nama;
       echo " <br> <b>NIM</b> : "; 
       echo $mhs->nim;
       echo " <br> <b>Alamat</b> : "; 
       echo $mhs->alamat; 
    } 
});
Route::get('/hapus', function()
{
    $mahasiswa = Mahasiswa::find(6);
    $mahasiswa -> delete();    
});






