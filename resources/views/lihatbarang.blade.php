<!DOCTYPE html>
<html>
<head>
	<title>Jaya Gembira Electronics</title>
</head>
<body>
<center>
<a href="http://localhost/laravel1/public/cekpembayaran"> <input type="button" value="Kembali"></a> <a>|</a> <input type="button" value="Print" onClick="window.location.reload()" />
</br>
</br>
</br>
<table border='1' class='table table-stripped'>

<tr>
<td>No</td>
<td>No Pesan</td>
<td>No User</td>
<td>Nama Barang</td>
<td>Harga Satuan</td>
<td>Jumlah Barang</td>
<td>Total Bayar</td>
</tr>
<?php 
$no=1;?>
@foreach($barang as $p)

	<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $p->id_pesan;?></td>
	<td><?php echo $p->id_user;?></td>
	<td><?php echo $p->barang;?></td>
	<td><?php echo $p->harga_satuan;?></td>
	<td><?php echo $p->jumlah_barang;?></td>
	<td><?php echo $p->jmlh_bayar;?></td>

	</tr>
	@endforeach
	</center>
	
	<script>
		window.print();
	</script>

</body>
</html>