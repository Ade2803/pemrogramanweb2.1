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

Route::get('/', 'ViewController@index');
Route::get('/tambah','ViewController@create');
Route::post('/store','ViewController@store');
Route::get('edit/{id}','ViewController@edit');
Route::post('update/{id}','ViewController@update');
Route::get('hapus/{id}','ViewController@destroy');

Route::get('/login',function () {
$mahasiswa = new Mahasiswa;
$mahasiswa -> nama = "Ade Wahyudin";
$mahasiswa -> nim = "14111111";
$mahasiswa -> alamat = "Bandung";
$mahasiswa -> save () ;
echo "<b>DATA BERHASIL DISIMPAN</b>";
});


//Route::get('/tambah',function()
//{
//	$mahasiswa=new Mahasiswa;
//	$mahasiswa->nama="Ade";
//	$mahasiswa->nim="14111111";
//	$mahasiswa->alamat="Bandung";
//	$mahasiswa->save();});

//Route::get('/ubah',function()
//{
//	$mahasiswa=new Mahasiswa::find(1);
//	$mahasiswa->nama="Ade";
//	$mahasiswa->nim="14111111";
//	$mahasiswa->alamat="Jakarta";
//	$mahasiswa->save();
//});

//Route::get('/ubah',function()
//{
//	$mahasiswa=Mahasiswa::all();
//	foreach($Mahasiswa as $mhs)
//	{
//		echo"<b>Nama</b>:";
//		echo $mhs->nama;
//		echo"<br><b>NIM</b>:";
//		echo $mhs->nim;
//		echo"<br><b>Alamat</b>:";
//		echo $mhs->Alamat;
//	}
//});
Auth::routes();

Route::get('/home', 'HomeController@index');
