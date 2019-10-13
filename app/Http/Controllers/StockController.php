<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Session;

class StockController extends Controller
{
	protected $nilai=array();
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$idb= $request->id;
		$barang = DB::table('barang')->where('id_barang',$idb)->get();
	// passing data barang yang didapat ke view edit.blade.php
		return view('cart1',['barang' => $barang]);
		
    }

	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
	
	public function akhir()
	{
		
		return view('akhir');
	}
	public function tdkjadi(Request $request)
	{
		$request->session()->forget('hasil');
		return redirect("/home");
	}
	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
		public function cartdel(Request $request)
	{
		$d=Session::get('hasil');
		unset($d[$request->id]);
		$jd=json_encode($d);
		Session::put('hasil',$d);
		return back();
	} 
	 
    public function store(Request $request)
    {
		$barang=$request->barang;
		$harga=$request->harga;
		$jumlah=$request->jumlah;
		$total=$jumlah*$harga;
		$hasil= $request->hasil;
		array_push($this->nilai,$barang,$jumlah,$total);
		Session::push('hasil',$this->nilai);
		DB::update("update barang set stok='$hasil' where barang='$barang'");
		 //return back()->withInput();
        return redirect('/home');
    }
	 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
