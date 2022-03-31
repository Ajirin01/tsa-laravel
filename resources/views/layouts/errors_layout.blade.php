<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Trumpet Sound Academy</title>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{asset('frontend/css/style-phase2.css')}}">
	<link rel="stylesheet" media="all" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/common-style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/pricing2.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/fonts/BebasNeueRegular.ttf')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
  	<link rel="stylesheet" href="{{ asset('frontend/fonts/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<!-- <link href="assets/css/documentation.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="public/css/animate.css"> -->
	
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="{{asset('frontend/dist/css/swiper.min.css')}}">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<style>
		.slider-cont2 {
		position: relative;
		height: 150px;
		}
		.swiper-container {
		width: 100%;
		height: 100%;

		}
		.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;

		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;
		}
	</style>
</head>
<body id="body">
	<header id="header">
		<div class="container">
			<a href="{{url('/')}}" id="logo" title="TrumpetSoundAcademy">TrumpetSoundAcademy</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="{{ route('about') }}">About TSA</a></li>
					<li><a href="{{ route('admission') }}">Admission</a></li>
					<li><a href="{{ route('events') }}">Events</a></li>
					<li><a href="{{ route('gallery', ['category'=> 'all']) }}">Gallery</a></li>
				</ul>
				<ul>
					
					<li><a href="https://eportal.trumpetsoundacademy.org">Portal</a></li>
					
					<li><a href="{{ route('chapel') }}">Chapel</a></li>
					<li><a href="{{ route('archive') }}">Archive</a></li>
					<li><a href="{{ route('publication') }}">Publications</a></li>
					
				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	<!-- / header -->
	<div class="text-center">
        <img class="animate__animated animate__pulse animate__infinite" style="margin-top: -30px; width: 400px; height: 200px" src="{{asset('frontend/images/pic_slide2.png')}}" alt="">
    </div>
	<div class="content">
		@yield('content')
	</div>
 
<marquee style="font-size:20px; color:#F00">…Building lives through Character and Academic Excellence</marquee>

   <footer id="footer">
	<div class="container">
		<div class="col-12 col-lg-12">
			<div class="col-1 col-md-4">
				<h3>Contact</h3>
				<ul>
					<li class="address"><a href="https://www.google.com/maps/place/149+Bosso+Road,+Bosso+920101,+Minna/@9.6513667,6.5316187,17z/data=!3m1!4b1!4m5!3m4!1s0x104c7087b645dcef:0xa28fff55fb1cdbb0!8m2!3d9.6513614!4d6.5338074">149, Bosso Low-Cost, Minna, Niger State, Nigeria.</a></li>
					<li class="mail"><a href="mailto:contact@trumpetsoundacademy.org">contact@trumpetsoundacademy.org</a></li>
					<li class="phone last"><a href="tel:+2349033449494">(+234) 903-344-9494</a></li>
				</ul>
			</div>
			<div class="col-2 col-md-4">
				<h3>Quick Links</h3>
				<ul>
					<li><a href="{{ route('admission') }}">Admission</a></li>
					<li><a href="{{ route('about') }}">About TSA</a></li>
					<li><a href="{{ route('events') }}">Events </a></li>
					<li><a href="{{ route('gallery', ['category'=> 'all']) }}">Gallery </a></li>
					<li class="last"><a href="https://eportal.trumpetsoundacademy.org">Portal </a></li>
					<li><a href="{{ route('archive') }}">Archive </a></li>
				</ul>
			</div>
			<div class="col-3 col-md-4">
				<h3>Social media</h3>
				<p>You can find us on our social media handles.</p>
				<ul>
					<li class="facebook"><a href="https://www.facebook.com/profile.php?id=100079557627159">Facebook</a></li>
								
					<li class="twitter"><a href="https://mobile.twitter.com/tsahnigeria">Twitter</a></li>
					<li class="google-plus"><a href="https://www.instagram.com/tsahqnigeria">Instagram</a></li>
					<li class="pinterest"><a href="https://youtube.com/channel/UCcfN4C0oHDKQZoUCKM_9KGQ">Youtube</a></li>
				</ul>
			</div>
		</div>
			
			<!--<article class="col-4">
				<h3>Newsletter</h3>
				<p>Assumenda est omnis dolor repellendus temporibus autem quibusdam.</p>
				<form action="#">
					<input placeholder="Email address..." type="text">
					<button type="submit">Subscribe</button>
				</form>
				<ul>
					<li><a href="#"></a></li>
				</ul>
			</article>-->
		<p class="copy">Copyright 2021 Trumpet Sound.  All rights reserved.</p>
	</div>
	<!-- / container -->
</footer>

</div>
</div>


<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
<script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/active.js')}}"></script>
{{-- <script>

</script> --}}

</body>
</html>
