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
						<li><a href="{{url('kirim')}}" target="_blank" rel="nofollow"  class="act">Cek Status Pengiriman</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	@foreach($barang as $p)
	<center>
<table width="454" height="385" border="0" style='border-collapse:collapse'>
  <tr>
    <td>No Bayar</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="id_bayar" required="required" style='width:290px;background-color:white;border:0px' value='<?php echo $p->id_bayar;?>' disabled></td>
  </tr>
  <tr>
    <td>No User</td>
    <td><div align="center">:</div></td>
    <td><input type='number' name="id_user" required="required" style='width:290px;background-color:white;border:0px' value="{{ Auth::user()->id }}" disabled></td>
  </tr>
  <tr>
    <td>Tanggal Kirim</td>
    <td><div align="center">:</div></td>
    <td><input type='date' name="tgl_kirim" style='width:290px;background-color:white;border:0px' value='<?php echo $p->tgl_kirim;?>' disabled></td>
  </tr>
  <tr>
    <td>Status Kirim</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="status_kirim" style='width:290px;background-color:white;border:0px' value='<?php echo $p->status_kirim;?>' disabled></td>
  </tr>
  <tr>
    <td>Nama Kurir</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="nama_kurir" style='width:290px;background-color:white;border:0px' value='<?php echo $p->nama_kurir;?>' disabled></td>
  </tr>
  <tr>
    <td>Bukti</td>
    <td><div align="center">:</div></td>
    <td><input type='text' name="bukti" style='width:290px;background-color:white;border:0px' value='<?php echo $p->bukti;?>' disabled></td>
  </tr>
   <tr>
    <td></td>
    <td></td>
    <?php if($p->bukti==""){
	}
	else{
		?>
	<td><image src="uploadgambar/selesai/{{ $p->bukti }}" width="250px" height="150px" style="border:0px solid black"></td>
	<?php } ?>
  </tr>
</table>
</center>
@endforeach
</body>
</html>
