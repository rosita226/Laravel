<?php
use App\Mahasiswa;
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

Route::get('/', 'HomeController@index');
Route::get('/awal', 'ViewController@awal');
Route::get('/edit', 'ViewController@ubah'); 
Route::get('/add', 'ViewController@tambah');
Route::post('/add/action', 'ViewController@add_action');
Route::get('awal/edit/{id}', 'ViewController@ubah');
Route::get('awal/delete/{id}', 'ViewController@hapus');
Route::post('edit/update/{id}', 'ViewController@ganti');

Route::get('/ubah', function(){
	$Mahasiswa = Mahasiswa::find(10);
	$Mahasiswa -> nama = "Dani";
	$Mahasiswa -> nim = "14 111 220";
	$Mahasiswa -> alamat = "Bandung";
	$Mahasiswa -> save();
});

Route::get('/tampil', function()
{
	$mahasiswa = Mahasiswa::all();
	foreach($mahasiswa as $mhs)
	{
		echo "<br><b>Nama</b></br> : ";
		echo $mhs->nama;
		echo "<br> <b>NIM</b> : ";
		echo $mhs ->nim;
		echo "<br><b>Alamat</b> : ";
	echo $mhs->alamat;
	}
});

Route::get('/hapus', function(){
	$Mahasiswa = Mahasiswa::find(2);
	$Mahasiswa -> delete();
});

Auth::routes();

Route::get('/home', 'HomeController@index');
