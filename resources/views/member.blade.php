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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
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
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
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
			
		<div class="search">
			<input class="search_box" type="checkbox" id="search_box">
			<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
			
			<div class="search_form">
				<form action="http://localhost/laravel1/public/cari" method="GET">
				<input type="text" name="cari" placeholder="Cari Barang..." value="{{ old('cari') }}">
				<input type="submit" value="CARI">
				</form>
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
						<li><a href="http://localhost/laravel1/public/home" class="act">Home</a></li>	
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
	<!-- //header -->
	<!-- navigation -->
	<div class="banner">
		<div class="container">
			<h3>Jaya Gembira, <span>Special Offers</span></h3>
		</div>
	</div>
		<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="{{url('speaker')}}">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/logo/maspion.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/cosmos.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/lg.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/miyako.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/panasonic.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/philips.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/rinnai.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/sanyo.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/sekai.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/sharp.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/shimizu.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/logo/toshiba.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
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
		</div>
	</div>
	<!-- //top-brands --> 
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