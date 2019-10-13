<!DOCTYPE html>
<html>
<head>
	<title>Jaya Gembira Electronics</title>
</head>
<body>
 
	<h2>Data Barang</h2>
 
	<a href="/laravel1/public/tambah"> + Tambah Barang Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Berat</th>
			<th>Keterangan</th>
			<th>Gambar</th>
			<th>Opsi</th>
		</tr>
		@foreach($barang as $p)
		<tr>
			<td>{{ $p->id_barang}}</td>
			<td>{{ $p->id_kategori}}</td>
			<td>{{ $p->barang}}</td>
			<td>{{ $p->harga }}</td>
			<td>{{ $p->stok}}</td>
			<td>{{ $p->berat }}</td>
			<td>{{ $p->keterangan }}</td>
			<td><image src="uploadgambar/{{ $p->gambar }}" width="100px"></td>
			<td>
				<a href="/laravel1/public/edit/{{ $p->id_barang }}">Edit</a>
				|
				<a href="/laravel1/public/hapus/{{ $p->id_barang }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>