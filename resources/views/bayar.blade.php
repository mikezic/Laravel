<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jaya Gembira Electronics</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Jaya Gembira Electronic</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body> 
	<!-- header modal -->
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
		
			<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
            </li>
			
			<div class="w3l_logo">
				<h1><a href="http://localhost/laravel1/public/home">Jaya Gembira<span>Your stores. Your place.</span></a></h1>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="http://localhost/laravel1/public/home">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Peralatan Dapur</h6>
											<li><a href="{{url('magic_com')}}">Magic Com</a></li>
											<li><a href="{{url('blender')}}">Blender <span>New</span></a></li> 
											<li><a href="{{url('mixer')}}">Mixer</a></li>
											<li><a href="{{url('kompor')}}">Kompor Gas<span>New</span></a></li>
											<li><a href="{{url('oven')}}">Oven</a></li>
											<li><a href="{{url('toaster')}}">Toaster</a></li>
											<li><a href="{{url('juicer')}}">Juicer</a></li> 
											<li><a href="{{url('coffe')}}">Coffe Maker</a></li>
											<li><a href="{{url('kompor_listrik')}}">Kompor Listrik</a></li>
											<li><a href="{{url('dispenser')}}">Dispenser Air</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Elektronik Rumah Tangga</h6>
											<li><a href="{{url('kipas_angin')}}">Kipas Angin</a></li>
											<li><a href="{{url('lampu')}}">Lampu</a></li>
											<li><a href="{{url('ac')}}">AC<span>New</span></a></li>
											<li><a href="{{url('vacuum')}}">Vacuum Cleaner</a></li>
											<li><a href="{{url('pompa_air')}}">Pompa Air</a></li>
											<li><a href="{{url('kulkas')}}">Kulkas</a></li>
											<li><a href="{{url('water_h')}}">Water Heater</a></li>
											<li><a href="{{url('air_c')}}">Air Cooler</a></li>
											<li><a href="{{url('mesincuci')}}">Mesin Cuci</a></li>
											<li><a href="{{url('exhaustfan')}}">Exhaust Fan</a></li>
											<li><a href="{{url('hairdry')}}">Hair Dryer</a></li>
											<li><a href="{{url('setrika')}}">Setrika</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Audio & Video </h6>
											<li><a href="{{url('tv')}}">Tv</a></li>
											<li><a href="{{url('speaker')}}">Speaker<span>New</span></a></li>
											<li><a href="{{url('bracket')}}">Bracket Tv</a></li>
											<li><a href="{{url('homet')}}">Home Teater</a></li>
											<li><a href="{{url('subwoofer')}}">Subwoofer</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="{{url('akhir')}}">Check Out</a></li>
						<li><a href="{{url('kirim')}}" target="_blank" rel="nofollow">Cek Status Pengiriman</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	
<h2>Data Pembayaran</h2>
 <table width="454" height="285" border="0" style='border-collapse:collapse'>
	<form action="{{url('gambarbayar')}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
	
	@foreach($id as $p)
   
    <input type='number' hidden name="id_pesan" required="required"  style='width:290px' value="<?php echo $p->id_pesan+1?>"></td>
@endforeach
	
	<tr>
    <td>Tanggal Bayar</td>
    <td><div align="center">:</div></td>
    <td><input type='date' name="tgl_bayar1" required="required" disabled style='width:290px' value='<?php echo date("Y-m-d");?>'></td>
	<input type='date' name="tgl_bayar" hidden required="required"  style='width:290px' value='<?php echo date("Y-m-d");?>'>
	</tr>
	
	<tr>
    <td>Total Bayar</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="jmlh_bayar1" required="required"  disabled style='width:290px' value="<?php echo $total;?>" ></td>
	<input type='number' name="jmlh_bayar"  hidden required="required" style='width:290px' value="<?php echo $total;?>" >
	</tr>
	
	<tr>
    <td>No User</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="id_user1"  required="required"  disabled style='width:290px' value="{{ Auth::user()->id }}" ></td>
	<input type='number' name="id_user"  hidden required="required" style='width:290px' value="{{ Auth::user()->id }}" >
	</tr>
	
	<tr>
    <td>Nomor Hp</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="nomor_hp" required="required" style='width:290px'></td>
	</tr>
	
	<tr>
    <td>Nama User</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="nama" required="required" style='width:290px' value="{{ Auth::user()->name }}"></td>
	</tr>
	
	<tr>
    <td height="49" colspan="3"><center><h3><i>Alamat Pengiriman</i></h3>
    <div align="center"></div></td>
	</tr>
	
	<tr>
    <td>Propinsi</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="propinsi" required="required" style='width:290px'></td>
	</tr>
	
	<tr>
    <td>Kota</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="kota" required="required" style='width:290px'></td>
	</tr>

	<tr>
    <td>Kecamatan</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="kecamatan" required="required" style='width:290px'></td>
	</tr>
	
	<tr>
    <td>Alamat</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="alamat" required="required" style='width:290px'></td>
	</tr>
	
	<tr>
    <td>Bukti</td>
    <td><div align="center">:</div></td>
    <td><input type='file' name="bukti" required="required" style='width:290px'></td>
	</tr>
	
 </table>
 		</br>
		Silahkan Transfer ke nomer rekening yang tertera di bawah ini <b>7722334455</b>
		</br>Apabila Sudah Mengirimkan Bukti Transfer Harap Konfirmasi Ke 
		</br>Admin Kami Di Nomor Whats App <b>081234991002</b>
		</br><input type="submit" value="Kirim" name="simpan">
	<div style='position:relative;left:450px;bottom:460px'>
<?php
		$g=0;
		$d=Session::get('hasil');
		$i=0;
		$wal="";
		
		echo "<table border=1><tr><td>Barang</td><td>Jumlah Barang</td><td>Harga Satuan</td><td>Total</td></tr>";
		while($i<sizeof($d)){
			$ki=json_encode($d[$i][2]);
			$kia=json_encode($d[$i][1]);
			$ta=$ki/$d[$i][1];
			
			echo "<tr>";
			echo "<td><input type='text' disabled id='nama' value='".json_encode($d[$i][0])."'></td>";
			echo "<td><input type=number id='jml' name=jumlah value=".json_encode($d[$i][1])." disabled=disabled</td>";
			echo "<td><input type=number id='jml' name=harga value =$ta disabled=disabled</td>";
			echo "<td>".json_encode($d[$i][2])."</td>";
			
			$g+=json_encode($d[$i][2]);
			$wal.=json_encode($d[$i][0]).".".json_encode($d[$i][1]).",";
			$i++;
			
		}
		$ex=explode('"',$wal);
		$jadi=str_replace('"',"",$wal);
		$jadi1=str_replace('.',"=",$jadi);
		echo "<tr><td></td><td></td><td></td><td>".$g."</td>";
		echo "</table>";
		?>
		</div>
		<input type='text' id='all' value='<?php echo $jadi1;?>' name='all' hidden>
	</form>
</body>
</html>