<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Trumpet Sound Academy</title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="{{asset('frontend/css/style-phase2.css')}}">
	<link rel="stylesheet" media="all" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/common-style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/pricing2.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/fonts/BebasNeueRegular.ttf')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<!-- <link href="assets/css/documentation.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="public/css/animate.css"> -->
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="TrumpetSoundAcademy">TrumpetSoundAcademy</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="{{ route('about') }}">About TSA</a></li>
					<li><a href="{{ route('admission') }}">Admission</a></li>
					<li><a href="{{ route('events') }}">Events</a></li>
					</ul>
				<ul>
					<li><a href="{{ route('gallery') }}">Gallery</a></li>
					<li><a href="http://eportal.trumpetsoundacademy.org">Portal</a></li>
					
					<li><a href="{{ route('chapel') }}">Chapel</a></li>
					<li><a href="{{ route('gallery') }}">Archive</a></li>
					
					</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
			
	<div class="slider">
		<ul class="bxslider">
			<li>
				<div class="container">
					<div class="info"><br>
						<h2 id="tsa" style="cursor: pointer">TSA</h2> 
						<marquee style="margin-top: -6%"> <h2><span>We Mould lives Into Christ Likeness </span></h2></marquee>
						<a href="#">Admission! Enrol Online Now</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info"><br>
						<h2>TSA</h2> 
						<marquee style="margin-top: -6%"> <h2><span>We Mould lives Into Christ Likeness </span></h2></marquee>
						<a href="#">Admission! Enrol Online Now</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info"><br>
						<h2>TSA</h2> 
						<marquee style="margin-top: -6%"> <h2><span>We Mould lives Into Christ Likeness </span></h2></marquee>
						<a href="#">Admission! Enrol Online Now</a>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
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
					 <li class="address"><a href="#">149, Bosso Low-Cost, Minna, Niger State, Nigeria.</a></li>
					 <li class="mail"><a href="#">contact@trumpetsoundacademy.org</a></li>
					 <li class="phone last"><a href="#">(+234) 903-344-9494</a></li>
				 </ul>
			 </div>
			 <div class="col-2 col-md-4">
				 <h3>Quick Links</h3>
				 <ul>
					 <li><a href="#">Admission</a></li>
					 <li><a href="#">About TSA</a></li>
					 <li><a href="#">Events </a></li>
					 <li><a href="#">Gallery </a></li>
					 <li class="last"><a href="#">Portal </a></li>
					 <li><a href="#">Archive </a></li>
				 </ul>
			 </div>
			 <div class="col-3 col-md-4">
				 <h3>Social media</h3>
				 <p>You can find us on our social media handles.</p>
				 <ul>
					 <li class="facebook"><a href="#">Facebook</a></li>
					 
					 <li class="twitter"><a href="#">Twitter</a></li>
					 <li class="Instagram"><a href="#">Instagram</a></li>
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
	 <!-- / container 
 </footer>
 <!-- / footer -->

 <div id="fancy">
	 <h2>Request information</h2>
	 <form action="#">
		 <div class="left">
			 <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
			 <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
			 <fieldset class="subject"><select><option>Admission Enquiry</option><option>School Location</option><option>School Fees</option></select></fieldset>
		 </div>
		 <div class="right">
			 <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
		 </div>
		 <div class="btn-holder">
			 <button class="btn blue" type="submit">Send request</button>
		 </div>
	 </form>
 </div>

 <div id="vacancy">
	 <h2>Request information</h2>
	 <form action="#">
		 <div class="left">
			 <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
			 <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
			 <fieldset class="subject"><select><option>Admission Enquiry</option><option>School Location</option><option>School Fees</option></select></fieldset>
		 </div>
		 <div class="right">
			 <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
		 </div>
		 <div class="btn-holder">
			 <button class="btn blue" type="submit">Send request</button>
		 </div>
	 </form>
 </div>
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

</body>
</html>
