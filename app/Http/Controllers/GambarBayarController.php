<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Gambar;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
class GambarBayarController extends Controller
{
    public function index()
    {
        $gambarbayar = Gambar::all();
        return view('bayar', compact('gambarbayar'));
    }
 
    public function create()
    {
        return view('gambarbayar.bayar');
    }
 
    public function store(Request $request)
    {
		$this->validate($request, [
			'file_gambar' => $request->bukti,
			]);
		$bukti = $request->file('file_gambar');
		$idp=$request->id_pesan;
		$namaFile = date('dmyhisa').".jpg";
		$request->file('bukti')->move('uploadgambar', $namaFile);
		$do = new Gambar($request->all());
		$do->file_gambar = $namaFile;
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
		'bukti' => $namaFile,
		'barang' => $request->all,
		]);
		$d=Session::get('hasil');
		$i=0; 
		while($i<sizeof(Session::get('hasil'))){		
				$da=json_encode($d[$i][2]);
				$dc=$d[$i][1];
				$dbb=json_encode($d[$i][0]);
				DB::table('pesan_detail')->insert([
				'id_pesan' => $idp,
				'id_user' => $request->id_user,
				'harga_satuan' => $da/$d[$i][1],
				'jumlah_barang' => $dc,
				'jmlh_bayar' => $da,
				'barang' => str_replace('"','',$dbb),
		]);
		$i++;}
		//$pesan=DB::select('SELECT max(id_pesan) as maxn FROM pesan');
		
        return redirect('/home');
    }
}