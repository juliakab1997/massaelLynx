<!doctype html>
<html lang="fr">

	<head>
		<title> @yield('title') - massael services </title>
		<meta charset="utf-8">
		<base href="/">
		<meta name="format-detection" content="telephone=no">
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" href="css/stuck.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/touchTouch.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/tmStickUp.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/touchTouch.jquery.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
		});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>

    <body class="page1" id="top">
        <!--==============================header=================================-->
                <header>
                    <div id="stuck_container">
                        <div class="container">
                            <div class="row">
                                <div class="grid_12">
                                    <h1>
                                        <a href="/">
                                            <img src="images/log1o.png" alt="Massael services">
                                        </a>
                                    </h1>
                                    <div class="menu_block">
                                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                            <ul class="sf-menu">
                                                <li class="{{ Request::is('/') ? 'current' : '' }}" ><a href="/">Accueil</a></li>
                                                <li class="{{ Request::is('services') ? 'current' : '' }}"><a href="{{ url('services')}}">Service</a></li>
                                                <li class="{{ Request::is('portfolio') ? 'current' : '' }}"><a href="{{ url('portfolio')}}">Portfolio</a></li>
                                                <li class="{{ Request::is('contact') ? 'current' : '' }}"><a href="{{ url('contact')}}">Contacts</a></li>
                                            </ul>
                                        </nav>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>