<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$a=$_COOKIE["user"];
		echo "<script>console.log('$a')</script>";
		if($a=="admin@gmail.com")return view('admin');
		else return view('member');
    }
	public function index1()
    {
        return view('home');
    }	
	public function index6()
    {
    	// mengambil data dari table barang
    	$barang = DB::select('SELECT * FROM barang where id_kategori="7"');
 
    	// mengirim data barang ke view index
    	return view('kipas_angin',['barang' => $barang]);
 
    }
}
