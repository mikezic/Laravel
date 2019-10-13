<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Gambar;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
 
class GambarController extends Controller
{
    public function index()
    {
        $gambar = Gambar::all();
        return view('tambah', compact('gambar'));
    }
 
    public function create()
    {
        return view('gambar.tambah');
    }
 
    public function store(Request $request)
    {
        $this->validate($request, [
            'file_gambar' => $request->gambar,
            ]);
        $gambar = $request->file('file_gambar');
        $namaFile = date('dmyhisa').".jpg";
        $request->file('gambar')->move('uploadgambar', $namaFile);
        $do = new Gambar($request->all());
        $do->file_gambar = $namaFile;
        DB::table('barang')->insert([
		'id_kategori' => $request->id_kategori,
		'barang' => $request->barang,
		'harga' => $request->harga,
		'stok' => $request->stok,
		'berat' => $request->berat,
		'keterangan' => $request->keterangan,
		'gambar' => $namaFile,
	]);
        return redirect('gambar');
    }
}