<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="../../css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="../../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="../../js/jquery.min.js"></script> 
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
				<h1><a href="http://localhost/laravel1/public">Jaya Gembira<span>Your stores. Your place.</span></a></h1>
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
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner3">
		<div class="container">
			<h2>Get 15% FREE<span>Kipas Angin</span> For 3 <i>Minimum Purchase</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<marquee width="100%">Kipas Angin Maspion Hemat 15% </marquee>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
			<div class="col-md-3 w3ls_mobiles_grid_left">
				<div class="w3ls_mobiles_grid_left_grid">
					<h3>Price</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="/laravel1/public/sortir25/bracket/asc">Dari Terendah</a></li>
									<li><a href="/laravel1/public/sortir25/bracket/desc">Dari Termahal</a></li>
								</ul>
							</div>
						</div>
				</div>
			</div>
			  <div class="col-md-8 w3ls_mobiles_grid_right">
					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3>Showing Results: <span style="border:1px solid #3366ff;width:25;background-color:#3366ff;color:white;border-radius:50%;height:25">&nbsp&nbsp<font align="center"><?php echo sizeof($barang); ?> &nbsp</span></h3>
						</div>
						<div class="w3ls_mobiles_grid_right_grid2_right">
							
						</div>
						<div class="clearfix"> </div>
					</div>
	
				<table width="900" height="800px" cellpadding="10">			
		<tr>
		<?php $a=0;?>
		@foreach($barang as $p)
		<?php
		if( $_COOKIE["user"]=="admin@gmail.com"){
		
		?>
			<td style="margin-right:100"><center><image src="../../uploadgambar/{{ $p->gambar }}" width="280px" height="180px" style="border:1px solid black"><br>{{$p->barang}}<br>Rp. <?php echo number_format($p->harga,0,".",".");?><br>Stok Barang : <?php echo number_format($p->stok,0,".",".");?></br>
				<a href="/laravel1/public/edit/{{ $p->id_barang }}">Edit |</a>
				<a href="/laravel1/public/hapus/{{ $p->id_barang }}">Hapus</a></center></td>
		<?php
		}else{
			?>
			<td style="margin-right:100;"><center><image src="../../uploadgambar/{{ $p->gambar }}" width="280px" height="180px" style="border:1px solid black"><br>{{$p->barang}}<br>Rp. <?php echo number_format($p->harga,0,".",".");?><br>
			<form action="{{url('cart1')}}" method="POST"></form>
									<input type="hidden" name="barang" value="{{$p->barang}}" /> 
									<input type="hidden" name="harga" value="{{$p->harga}}"/>   
									<a href="{{url('cart1',$p->id_barang)}}"><button>Add To Cart</button></a>
								
				</td>
				<?php
		}
		?>
		<?php $a+=1;
	 if($a%3=="0"){echo "</tr>";}
		?>
		
		@endforeach
		
	</table>
	<center>
	<br/>
	Halaman : {{ $barang->currentPage() }} <br/>
	Jumlah Data : {{ $barang->total() }} <br/>
 
	{{ $barang->links() }}
	</center>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>  
	<!-- Related Products -->
	<!-- //Related Products -->
	<!-- newsletter -->
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i>CV. Jaya Gembira</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>jaya_gembira@gmail.com</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>081234991102</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="address"> 
						<li><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i>0313977462</li>
						<li><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i>0313977452</li>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://www.google.com/maps/place/Pergudangan+Mutiara+MARGOMULYO+INDAH/@-7.2436671,112.6691498,15z/data=!4m8!1m2!2m1!1spergudangan+mutiara+!3m4!1s0x0:0x9613c08d402afa3f!8m2!3d-7.2444521!4d112.670559">Pergudangan Mutiara <span> Margomulyo Surabaya </span></a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="address"> 
						<li><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>Peralatan Rumah Tangga</li>
						<li><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>Eletronik Rumah Tangga</li>
						<li><i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>Audio & Video</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="address"> 
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i><a href="{{url('aboutus')}}">About Us</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2017 Jaya Gembira Electronic Store</p>
			</div>
		</div>
	</div>
	<!-- //footer -->  
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems:4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:568,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>
