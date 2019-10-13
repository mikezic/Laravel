<!DOCTYPE html>
<html>
<head>
	<title>Jaya Gembira Electronics</title>
</head>
<body>

<center>
<table border='1' class='table table-stripped'>
<tr>
<td>Barang</td>
<td>Jumlah</td>
</tr>
<?php 
$no=1;?>
@foreach($barang as $p)
<?php $j=explode(",",$p->barang);
$k=explode("=",$j[0]);
?>
	<tr>
	<td><?php echo $k[0]?></td>
	<td><?php echo $k[1]?></td>
	</tr>
	@endforeach
	</center>
</body>
</html>
