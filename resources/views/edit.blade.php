<!DOCTYPE html>
<html>
<head>
	<title>Jaya Gembira Electronics</title>
</head>
<body> <center>
 
	<h2>Edit Data Barang</h2>
	
	<a href="http://localhost/laravel1/public/home"> Home</a>
	
	<br/>
	
  <table width="454" height="285" border="0" style='border-collapse:collapse'>
	@foreach($barang as $p)
	<form action="/laravel1/public/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_barang }}"> <br/>
	<tr>
    <td>Kategori</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="id_kategori" required="required" style='width:290px' value="{{ $p->id_kategori }}"></td>
	</tr>
	
	<tr>
    <td>Barang</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="barang" required="required" style='width:290px' value="{{ $p->barang }}"></td>
	</tr>
	
	<tr>
    <td>Harga</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="harga" required="required" style='width:290px' value="{{ $p->harga }}"></td>
	</tr>
	
	<tr>
    <td>Stok</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="stok" required="required" style='width:290px' value="{{ $p->stok }}" autocomplete=off></td>
	</tr>
	
	<tr>
    <td>Berat</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="berat" required="required" style='width:290px' value="{{ $p->berat }}"></td>
	</tr>
	
	<tr>
    <td>Keterangan</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="keterangan" required="required" style='width:290px' value="{{ $p->keterangan }}"></td>
	</tr>
	
	<tr>
    <td>Gambar</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="gambar" required="required" style='width:290px' id="gambar" value="{{ $p->gambar }}" disabled></td>
	</tr>
	  </table>
	  </br>
		  <input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</center>
</body>
</html>