<!DOCTYPE html>
<html>
<head>
	<title>Jaya Gembira Electonics</title>
</head>
<body> <center>
 
	<h3>Edit Data Kiriman</h3>
 
	<a href="http://localhost/laravel1/public/list_kirim"> Kembali</a>
	
	<br/>
	
	<table width="454" height="285" border="0" style='border-collapse:collapse'>
	@foreach($kirim as $p)
	<form action="/laravel1/public/update_kiriman" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_kirim }}"> <br/>
		
	<tr>
    <td>No Bayar</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="id_bayar" required="required" style='width:290px' value="{{ $p->id_bayar }}" disabled></td>
	</tr> 	
	</tr>
	
	<tr>
    <td>Tanggal Kirim</td>
    <td><div align="center">:</div></td>
    <td><input type='date' name="tgl_kirim" required="required" style='width:290px' value="{{ $p->tgl_kirim }}" disabled></td>
	</tr>
	
	<tr>
    <td>Status Kirim</td>
    <td><div align="center">:</div></td>
    <td><select name="status_kirim" class="select_item"  style='width:290px' value="{{ $p->status_kirim }}">
								<option>Belum Dikirim</option>
								<option>Sudah Dikirim</option>
								<option>Sudah Diterima</option>
	</select></td>
	</tr>
	
	<tr>
    <td>Nama Kurir</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="nama_kurir" required="required" style='width:290px' value="{{ $p->nama_kurir }}"></td>
	</tr>
	
	<tr>
    <td>Bukti</td>
    <td><div align="center">:</div></td>
    <td><input type='file' name="bukti"  style='width:290px' value="{{ $p->bukti }}"></td>
	</tr>
	
	</table>
		<br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 		

</center>
</body>
</html>