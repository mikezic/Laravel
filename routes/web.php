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

Route::get('/','BarangController@welcome');
//index barang peralatan rumah tangga
Route::get('/magic_coma','BarangController@index');
Route::get('/magic_com','BarangController@index');
Route::get('/blender','BarangController@index1');
Route::get('/mixer','BarangController@index2');
Route::get('/kompor','BarangController@index3');
Route::get('/oven','BarangController@index4');
Route::get('/toaster','BarangController@index5');
Route::get('/juicer','BarangController@index14');
Route::get('/coffe','BarangController@index15');
Route::get('/kompor_listrik','BarangController@index16');
Route::get('/dispenser','BarangController@index17');
Route::get('akhir','StockController@akhir');

//index barang eletronik rumah tangga
Route::get('/kipas_angin','BarangController@index6');
Route::get('/lampu','BarangController@index7');
Route::get('/ac','BarangController@index8');
Route::get('/vacuum','BarangController@index9');
Route::get('/pompa_air','BarangController@index13');
Route::get('/setrika','BarangController@index11');
Route::get('/kulkas','BarangController@index18'); 
Route::get('/water_h','BarangController@index19');
Route::get('/air_c','BarangController@index20');
Route::get('/mesincuci','BarangController@index21');
Route::get('/exhaustfan','BarangController@index22');
Route::get('/hairdry','BarangController@index23');

//index barang audio & video
Route::get('/tv','BarangController@index10');
Route::get('/speaker','BarangController@index12');
Route::get('/bracket','BarangController@index24');
Route::get('/homet','BarangController@index25');
Route::get('/subwoofer','BarangController@index26');

//CRUD
Route::get('/tambah','BarangController@tambah');
Route::post('/bayar','BarangController@bayar');
Route::get('/kirim','BarangController@kirim');
Route::resource('gambar','GambarController');
Route::get('/edit/{id}','BarangController@edit');
Route::get('/cart/{id}','BarangController@cart');
Route::post('/update','BarangController@update');
Route::get('/hapus/{id}','BarangController@hapus');

Route::get('/cart1/{id}','StockController@index');
Route::get('/cartdel/{id}','StockController@cartdel');
Route::post('cart2','StockController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@index1')->name('home');

Route::get('tdkjadi','StockController@tdkjadi');
Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::get('/aboutus','BarangController@aboutus');
Route::get('/mailus','BarangController@mailus');

//kirim
Route::get('/list_kirim','BarangController@listPengiriman');
Route::get('/pengiriman','BarangController@pengiriman');
Route::get('/kiriman_baru','BarangController@kiriman_baru');
Route::post('/kiriman_baru1','BarangController@kiriman1');
Route::get('/edit_kiriman/{id}','BarangController@edit_kiriman');
Route::post('/update_kiriman','BarangController@update_kiriman');

//pembayaran
Route::get('/cekpembayaran','BarangController@cekpembayaran');
Route::get('/lihatbarang/{id}','BarangController@lihatbarang');
Route::get('/bayar1/{id}/{id_user}/{tgl_bayar}/{no_bukti}/{jmlh_bayar}','BarangController@bayar1');
Route::resource('gambarbayar','GambarBayarController');


Route::get('/pembayaranbaru','BarangController@pembayaranbaru');
Route::post('/pembayaranbaru1','BarangController@pembayaranbaru1');

Route::get('/cari','BarangController@cari');
Route::get('/terendah','BarangController@terendah');
Route::get('/tertinggi','BarangController@tertinggi');

//peralatan dapur
Route::get('sortir/{name}/{by}','BarangController@sortir');
Route::get('sortir2/{name}/{by}','BarangController@sortir2');
Route::get('sortir3/{name}/{by}','BarangController@sortir3');
Route::get('sortir4/{name}/{by}','BarangController@sortir4');
Route::get('sortir5/{name}/{by}','BarangController@sortir5');
Route::get('sortir6/{name}/{by}','BarangController@sortir6');
Route::get('sortir7/{name}/{by}','BarangController@sortir7');
Route::get('sortir8/{name}/{by}','BarangController@sortir8');
Route::get('sortir9/{name}/{by}','BarangController@sortir9');
Route::get('sortir10/{name}/{by}','BarangController@sortir10');

//elektronik rumah tangga
Route::get('sortir11/{name}/{by}','BarangController@sortir11');
Route::get('sortir12/{name}/{by}','BarangController@sortir12');
Route::get('sortir13/{name}/{by}','BarangController@sortir13');
Route::get('sortir14/{name}/{by}','BarangController@sortir14');
Route::get('sortir15/{name}/{by}','BarangController@sortir15');
Route::get('sortir16/{name}/{by}','BarangController@sortir16');
Route::get('sortir17/{name}/{by}','BarangController@sortir17');
Route::get('sortir18/{name}/{by}','BarangController@sortir18');
Route::get('sortir19/{name}/{by}','BarangController@sortir19');
Route::get('sortir20/{name}/{by}','BarangController@sortir20');
Route::get('sortir21/{name}/{by}','BarangController@sortir21');
Route::get('sortir22/{name}/{by}','BarangController@sortir22');

// audio & video
Route::get('sortir23/{name}/{by}','BarangController@sortir23');
Route::get('sortir24/{name}/{by}','BarangController@sortir24');
Route::get('sortir25/{name}/{by}','BarangController@sortir25');
Route::get('sortir26/{name}/{by}','BarangController@sortir26');
Route::get('sortir27/{name}/{by}','BarangController@sortir27');

//Route::get('/cekbarang/{id}','BarangController@cekbarang');
