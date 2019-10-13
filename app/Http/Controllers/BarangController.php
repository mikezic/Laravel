<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Auth;
 
 
class BarangController extends Controller
{
	public function welcome()
	{
		
		return view('welcome');
	}
	
	public function cart()
	{
		return view('cart');
	}
	
	public function index()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('magic_com_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('magic_com',['barang' => $barang]);
    }
	
	 public function index1()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('blender_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('blender',['barang' => $barang]);
 
    }
	
	public function index2()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('mixer_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('mixer',['barang' => $barang]);
 
    }
	
	public function index3()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('kompor_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('kompor',['barang' => $barang]);
 
    }
	
	public function index4()
    {
    	// mengambil data dari table barang
    	 $barang = DB::table('oven_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('oven',['barang' => $barang]);
 
    }
	public function index5()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('toaster_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('toaster',['barang' => $barang]);
 
    }
	public function index6()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('kipas_angin_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('kipas_angin',['barang' => $barang]);
 
    }
	public function index7()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('lampu_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('lampu',['barang' => $barang]);
 
    }
	public function index8()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('ac_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('ac',['barang' => $barang]);
 
    }
	public function index9()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('vacuum_cleaner_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('vacuum',['barang' => $barang]);
 
    }
	public function index10()
    {
    	// mengambil data dari table barang
		$barang = DB::table('tv_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('tv',['barang' => $barang]);
 
    }
	public function index11()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('setrika_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('setrika',['barang' => $barang]);
 
    }
	public function index12()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('speaker_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('speaker',['barang' => $barang]);
 
    }
	public function index13()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('pompa_air_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('pompa_air',['barang' => $barang]);
 
    }
	public function index14()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('juicer_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('juicer',['barang' => $barang]);
 
    }
	public function index15()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('cofee_maker_list')->paginate(9);
				
    	// mengirim data barang ke view index
    	return view('coffe',['barang' => $barang]);
 
    }
	public function index16()
    {
    	// mengambil data dari table barang
		$barang = DB::table('kompor_listrik_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('kompor_listrik',['barang' => $barang]);
 
    }
	public function index17()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('dispenser_air_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('dispenser',['barang' => $barang]);
 
    }
		public function index18()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('kulkas_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('kulkas',['barang' => $barang]);
 
    }
		public function index19()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('water_heater_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('water_h',['barang' => $barang]);
 
    }
		public function index20()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('air_cooler_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('air_c',['barang' => $barang]);
 
    }
		public function index21()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('mesin_cuci_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('mesincuci',['barang' => $barang]);
 
    }
	public function index22()
    {
    	// mengambil data dari table barang
		$barang = DB::table('exhaust_fan_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('exhaustfan',['barang' => $barang]);
 
    }
	public function index23()
    {
    	// mengambil data dari table barang
		$barang = DB::table('hair_dryer_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('hairdry',['barang' => $barang]);
 
    }
	public function index24()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('bracket_tv_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('bracket',['barang' => $barang]);
 
    }
	public function index25()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('home_teater_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('homet',['barang' => $barang]);
 
    }
	public function index26()
    {
    	// mengambil data dari table barang
    	$barang = DB::table('subwoofer_list')->paginate(9);
 
    	// mengirim data barang ke view index
    	return view('subwoofer',['barang' => $barang]);
 
    }
	
	// method untuk menampilkan view form tambah barang
	public function tambah()
	{
	// memanggil view tambah
	return view('tambah');
	}
	
		public function magic_com()
	{
	// memanggil view tambah
	return view('magic_com');
	}

	// method untuk insert data ke table barang
	public function store(Request $request)
	{
	// insert data ke table barang
	DB::table('barang')->insert([
		'id_kategori' => $request->id_kategori,
		'barang' => $request->barang,
		'harga' => $request->harga,
		'stok' => $request->stok,
		'berat' => $request->berat,
		'keterangan' => $request->keterangan,
		'gambar' => $request->gambar,
	]);
	// alihkan halaman ke halaman barang
	return redirect('/barang');
	}
	
	// method untuk edit data barang
	public function edit($id)
	{
	// mengambil data barang berdasarkan id yang dipilih
	$barang = DB::table('barang')->where('id_barang',$id)->get();
	// passing data barang yang didapat ke view edit.blade.php
	return view('edit',['barang' => $barang]);
	}
	// update data barang
	public function update(Request $request)
	{
	// update data barang
	DB::table('barang')->where('id_barang',$request->id)->update([
		'id_kategori' => $request->id_kategori,
		'barang' => $request->barang,
		'harga' => $request->harga,
		'stok' => $request->stok,
		'berat' => $request->berat,
		'keterangan' => $request->keterangan,

	]);
	// alihkan halaman ke halaman barang
	return redirect('http://localhost/laravel1/public/home');
	}
	
	// method untuk hapus data barang
	public function hapus($id)
	{
	// menghapus data barang berdasarkan id yang dipilih
	DB::table('barang')->where('id_barang',$id)->delete();
		
	// alihkan halaman ke halaman barang
	return redirect('http://localhost/laravel1/public/magic_com/');
	}
	 
	public function bayar(Request $request)
    {
		
    	// mengambil data dari table barang
 
    	// mengirim data barang ke view index
		$request->session()->forget('total');
		$total=$request->total;
		$id=DB::select("SELECT * FROM pesan order by id_pesan desc limit 1");
		//echo json_encode(Session::get('total'));
    	return view('bayar',['total'=>$total,'id'=>$id]);
 
    }
	public function kirim()
    {
    	// mengambil data dari table barang
		$id=Auth::user()->id;
		$kirim = DB::select("SELECT * FROM kirim where id_user=$id limit 1");
    	// mengirim data barang ke view index
    	return view('kirim',['barang' => $kirim]);
 
    }
	public function aboutus()
	{
	// memanggil view tambah
	return view('aboutus');
	}
	public function mailus()
	{
	return view('mailus');
	}
	
	public function pengiriman()
	{
	return view('pengiriman');
	}
	
	// Kiriman baru
	public function listPengiriman()
	{
		$kirim = DB::table('pengiriman_list')->paginate(5);
		return view("list_kirim",['barang'=>$kirim]);
	}
	public function kiriman_baru()
	{
	return view('kiriman_baru');
	}
	
	public function kiriman1(Request $request)
	{

	DB::table('kirim')->insert([
		'id_bayar' => $request->id_bayar,
		'id_user' => $request->id_user,
		'tgl_kirim' => $request->tgl_kirim,
		'status_kirim' => $request->status_kirim,
		'nama_kurir' => $request->nama_kurir,
		'bukti' => $request->bukti,
	]);

	return redirect('/list_kirim');
	}
	
	public function edit_kiriman($id)
	{
	// mengambil data kirim berdasarkan id yang dipilih
	$kirim = DB::table('kirim')->where('id_kirim',$id)->get();
	// passing data kirim yang didapat ke view edit.blade.php
	return view('edit_kiriman',['kirim' => $kirim]);
	}
	
	public function update_kiriman(Request $request)
	{
	// update data kirim
	DB::table('kirim')->where('id_kirim',$request->id)->update([
		'status_kirim' => $request->status_kirim,
		'nama_kurir' => $request->nama_kurir,
		'bukti' => $request->bukti,
	]);
	// alihkan halaman ke halaman kirim
	return redirect('http://localhost/laravel1/public/list_kirim');
	}
	
	
	// Pembayaran Baru
	public function cekpembayaran()
	{
		$pesan=DB::table('pembayaran_list')->paginate(5);
		return view("cekpembayaran",['barang'=>$pesan]);
	}
	
	public function pembayaranbaru()
	{
	return view('pembayaranbaru');
	}
	
	public function pembayaranbaru1(Request $request)
	{

	DB::table('pesan')->insert([
		'tgl_bayar' => $request->tgl_bayar,
		'jmlh_bayar' => $request->jmlh_bayar,
		'id_user' => $request->id_user,
		'nomor_hp' => $request->nomor_hp,
		'nama' => $request->nama,
		'propinsi' => $request->propinsi,
		'kota' => $request->kota,
		'kecamatan' => $request->kecamatan,
		'alamat' => $request->alamat,
		'bukti' => $request->bukti,
		'barang' => $request->all,
	]);

	return redirect('/home');
	}
	
	/*
	public function cekbarang(Request $request)
	{
	$id=$request->id;
	$pesan=DB::select("SELECT * FROM pesan_detail where id_user=$id");
	
	return view("cekbarang",['barang'=>$pesan]);
	}
	*/
	
	public function lihatbarang(Request $request)
	{
	$id=$request->id;
	$pesan=DB::select("SELECT * FROM pesan_detail where id_pesan=$id");
	
	return view("lihatbarang",['barang'=>$pesan]);
	}
	
	public function bayar1(Request $request)
	{
	$id=$request->id;
	$id_user=$request->id_user;
	$tgl_bayar=$request->tgl_bayar;
	$no_bukti=$request->no_bukti;
	$jmlh_bayar=$request->jmlh_bayar;
	$pesan=DB::select("SELECT * FROM pesan_detail");
	
	DB::table('bayar')->insert([
		'id_pesan' => $request->id,
		'id_user' => $request->id_user,
		'tgl_bayar' => $request->tgl_bayar,
		'no_bukti' => $request->no_bukti,
		'jmlh_bayar' => $request->jmlh_bayar,
		'verifikasi' => "Sudah",
	]);
	
	//$id1=Auth::user()->id;
	$id=$request->id;
	$id_user=$request->id_user;
	$tgl_bayar=$request->tgl_bayar;
	$no_bukti=$request->no_bukti;
	$jmlh_bayar=$request->jmlh_bayar;
	$pesan=DB::select("SELECT * FROM bayar");
	
	DB::table('kirim')->insert([
		'id_bayar' => $request->id,
		'id_user' => $id_user,
		'tgl_kirim' => date("Y/m/d"),
		'status_kirim' => "Belum Dikirim",
	]);
	
	return redirect("list_kirim");
	}
	
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
		// mengambil data dari table pegawai sesuai pencarian data
		$barang = DB::table('barang')
		->where('barang','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('cari',['barang' => $barang]);
 
	}
	
	//magic com
	public function terendah()
	{
		$pesan=DB::table('ac_asc')->paginate(9);
		return view("terendah",['barang'=>$pesan]);
	}
	public function tertinggi()
	{
		$pesan=DB::table('ac_desc')->paginate(9);
		return view("tertinggi",['barang'=>$pesan]);
	}
		
	public function sortir(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir",['barang'=>$pesan]);
	}
	
	public function sortir2(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir2",['barang'=>$pesan]);
	}

	public function sortir3(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir3",['barang'=>$pesan]);
	}
	
	public function sortir4(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir4",['barang'=>$pesan]);
	}
	
	public function sortir5(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir5",['barang'=>$pesan]);
	}
	
	public function sortir6(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir6",['barang'=>$pesan]);
	}
	
	public function sortir7(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir7",['barang'=>$pesan]);
	}
	
	public function sortir8(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir8",['barang'=>$pesan]);
	}
	
	public function sortir9(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir9",['barang'=>$pesan]);
	}
	
	public function sortir10(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir10",['barang'=>$pesan]);
	}
	
	public function sortir11(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir11",['barang'=>$pesan]);
	}
	
	public function sortir12(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir12",['barang'=>$pesan]);
	}
	
	public function sortir13(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir13",['barang'=>$pesan]);
	}
	
	public function sortir14(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir14",['barang'=>$pesan]);
	}
	
	public function sortir15(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir15",['barang'=>$pesan]);
	}
	
	public function sortir16(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir16",['barang'=>$pesan]);
	}
	
	public function sortir17(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir17",['barang'=>$pesan]);
	}
	
	public function sortir18(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir18",['barang'=>$pesan]);
	}
	
	public function sortir19(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir19",['barang'=>$pesan]);
	}
	
	public function sortir20(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir20",['barang'=>$pesan]);
	}
	
	public function sortir21(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir21",['barang'=>$pesan]);
	}
	
	public function sortir22(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir22",['barang'=>$pesan]);
	}
	
	public function sortir23(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir23",['barang'=>$pesan]);
	}
	
	public function sortir24(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir24",['barang'=>$pesan]);
	}
	
	public function sortir25(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir25",['barang'=>$pesan]);
	}
	
	public function sortir26(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir26",['barang'=>$pesan]);
	}
	
	public function sortir27(Request $request)
	{
		$nb=$request->name;
		$bb=$request->by;
		$pesan=DB::table('barang_view')->where('kategori','like',"%".$nb."%")->orderBy('harga',$bb)->paginate(9);
		return view("sortir27",['barang'=>$pesan]);
	}

}