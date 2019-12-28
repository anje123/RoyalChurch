<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<!-- Define Charset -->
	<meta charset="utf-8"/>

	<!-- Page Title -->
	<title>RCCG- THE ROYAL COURT</title>

	<!-- Responsive Metatag -->    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Page Description and Author -->
	<meta name="description" >
	<meta name="author" content="mustachethemes">


	<!-- ************************** Stylesheet ****************************** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}">

	<link rel="shortcut icon" href="{{ asset('app/img/rccglogo.png') }}">
	
	<!-- Font icons -->
	<link rel="stylesheet" href="{{asset('app/font/fontello.css')}}">
	<!--[if IE 7]>
    <link href="font/fontello-ie7.css" rel="stylesheet" ><![endif]-->
	<!-- Slider Revolution -->
	<link rel="stylesheet" href="{{asset('app/plugins/revolution/css/settings.css')}}">

	<!-- Style -->
	<link rel="stylesheet" href="{{asset('app/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('app/css/color/blue.css')}}">

	<!-- Media-Queties -->
	<link rel="stylesheet" href="{{asset('app/css/media-queries.css')}}">
	

	<!-- Custom -->
	<!--[if IE 8]>
	<link rel="stylesheet" href="css/style-ie8.css">
	<![endif]-->

</head>


<body>

<!-- begin Header -->
<header class="navbar navbar-fixed-top animated fadeInDown delay2">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-menu"></span>
		</button>
		<h2 class="logo animated fadeInLeft delay4">
				<a class="navbar-brand"><img src="{{asset('app/img/rccglogo.png')}}" alt="Logo" /></a>
		</h2> 
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="animated fadeInRight delay3"><a href="#menu-jumbotron">Home</a></li>
			<li class="animated fadeInRight delay3"><a href="#menu-about">About</a></li>
			<li class="animated fadeInRight delay3"><a href="#menu-staff">Our Pastor</a></li>
			<li class="animated fadeInRight delay2"><a href="#menu-gallery">Gallery</a></li>
			<li class="animated fadeInRight delay2"><a href="#menu-sermons">Sermons</a></li>
			<li class="animated fadeInRight delay2"><a href="#menu-events">News &amp; Events</a></li>
			<li class="animated fadeInRight delay1"> <a href="#menu-contact">Contact</a></li>
		</ul>
	</div><!--/.nav-collapse -->
</div>
</header>
<!-- end Header -->
@yield('content')	
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row copy">
			<div class="col-lg-12">
				<h6>© 2019 The Royal Court Lagos . All rights reserved.</h6>
				<h6> <a href="https://www.linkedin.com/in/olufemi-anjorin-9b594b158" target="_blank"> Coded by Anjorin Olufemi Benjamin.</a></h6>
			</div>
		</div>
	</div>
</footer>   
<!-- end Footer --> 
		
<a  class="scrollup"><i class="icon-up-open"></i></a>      

		
<!-- ******************************************************************** -->
<!-- ************************** JQuery libs ***************************** -->
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js\"")</script>
  
    <!-- Bootstrap -->
    <script src="{{asset('app/js/bootstrap.min.js')}}"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
    <script src="js/respond.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    
    <!-- Scroll To-->         
    <script src="{{asset('app/js/jquery.scrollTo.js')}}"></script> 
    <script src="{{asset('app/js/jquery.nav.js')}}"></script> 
    
    <!-- Retina Support-->
    <script src="{{asset('app/js/retina.js')}}" ></script>
    
    <!-- gMaps -->
    <script src="http://maps.google.com/maps/api/js?sensor=true" ></script>
    <script src="{{asset('app/js/gmaps.js')}}" ></script>
    
    <!-- Slider Revolution -->
    <script src="{{asset('app/plugins/revolution/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('app/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    
    <!-- prettyPhoto -->
    <script src="{{asset('app/plugins/prettyphoto/js/jquery.prettyPhoto.js')}}"></script>
    
    <!-- jPlayer -->
    <script src="{{asset('app/plugins/jplayer/jquery.jplayer.js')}}" ></script>
    
    <!-- Custom -->
    <script src="{{asset('app/js/script.js')}}"></script>

<!-- ******************************************************************** -->

</body>

</html>