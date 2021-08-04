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
			<a href="/" id="logo" title="TrumpetSoundAcademy">TrumpetSoundAcademy</a>
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
				
				<div class="featured-post-area" style="margin-top: -5%;">
					<div class="container">
						<div class="row">
							
							<div class="col-12 col-md-6 col-lg-8">
								<div class="row">
									<!-- #####  Hero Area Start ##### -->
									<div class="col-md-8">
										<div class="hero-area">
											<div class="container">
												<div class="row align-items-center">
													<div class="col-12 col-lg-8">
														<!-- Breaking News Widget -->
														<div class="breaking-news-area d-flex align-items-top">
															<div class="news-title yellow-rect-box">
																<p class="yellow-rect-box">Latest Update</p>
															</div>
															<div id="breakingNewsTicker" class="ticker">
																<ul>
																	<li><a href=""><h3>Admission!!! Apply for the ongoing admission online or download form</h3></a></li>
																	<li><a href=""><h3>Vacancy!!! Appply for the current positions</h3></a></li>
																	<li><a href=""><h3>Examination!!! Our Examination is commencing next week</h3></a></li>
																	
																</ul>
															</div>
														</div>
								
														<!-- Breaking News Widget -->
														<!-- <div class="breaking-news-area d-flex align-items-center mt-15">
															<div class="news-title title2 yellow-rect-box">
																<p class="yellow-rect-box">Popular Update</p>
															</div>
															<div id="internationalTicker" class="ticker">
																<ul>
																	{{-- @foreach ($random_articles as $random)
																		<li><a href="{{URL::to('articles/'.$random['article_type'].'/'.$random['id'])}}">{{$random['article_title']}}</a></li>
																	@endforeach --}}
																</ul>
															</div>
														</div> -->
													</div>
													
													
												</div>
											</div>
										</div>
									</div>
										<!-- ##### Hero Area End ##### -->
                                        @yield('upper-content')
									
								</div>
							</div>
							<!-- ##### right side menu starts here #####  -->
							<div class="col-12 col-md-6 col-lg-4" style="margin-top: 4%; background-color: #222450; padding: 20px 0">
								<!-- Single Featured Post -->
								<div>
									<h4 class="text-center" style="color: white">
										ANTHEM AND PLEDGES
									</h4>
								</div>
								<div class="single-blog-post small-featured-post d-flex">
									<div class="post-data">
										<a href="#" class="post-catagory">1. NATIONAL ANTHEM</a>
										<p id="">
											Arise, O Compatriots” <br>
											Nigeria’s call obey<span id="elips">...</span> <br>

										</p>
										<p id="more-container">
											To serve our fatherland <br>
											With love and strength & faith, <br>
											The labour of our heroes past <br>
											Shall never be in vain, <br>
											To serve with heart and might <br>
											One nation bound in freedom, <br>
											Peace and unity.

										</p>
										<a href="#"><h4 id="toggle-btn" class="text-center" style="color:white !important; font-size:0.8rem">… Read more …</h4></a>
									</div>
								</div>
			
								<!-- Single Featured Post -->
								<div class="single-blog-post small-featured-post d-flex ">
									<div class="post-data">
										<a href="#" class="post-catagory">2. THE NATIONAL PLEDGE</a>
										<p id="">
											I pledge to Nigeria my country, <br>
											To be faithful, loyal and honest,<span id="elips1">...</span>  <br>
										</p>
										<p id="more-container1">
											To serve Nigeria with all my strength, <br>
											To defend her unity, <br>
											And uphold her honour and glory <br>
											So help me God! <br>

										</p>
										<a href="#"><h4 id="toggle-btn1" class="text-center" style="color:white !important; font-size:0.8rem">… Read more …</h4></a>
									</div>
								</div>

								<div class="single-blog-post small-featured-post d-flex">
									<div class="post-data">
										<a href="#" class="post-catagory">3. THE CHRISTIAN PLEDGE</a>
										<p id="">
											I pledge allegiance to the Christian flag<br>
											And to the saviour,<span id="elips2">...</span> <br>

										</p>
										<p id="more-container2">
											For whose kingdom it stands,<br>
											One saviour, crucified, risen and coming again,<br>
											With life and liberty, <br>
											For all who believe.

										</p>
										<a href="#"><h4 id="toggle-btn2" class="text-center" style="color:white !important; font-size:0.8rem">… Read more …</h4></a>
									</div>
								</div>
			
								<!-- Single Featured Post -->
								<div class="single-blog-post small-featured-post d-flex ">
									<div class="post-data">
										<a href="#" class="post-catagory">4. PLEDGE TO THE BIBLE</a>
										<p id="">
											I pledge allegiance to the Bible, <br>
											God’s Holy word,<span id="elips3">...</span>  <br>
										</p>
										<p id="more-container3">
											I will make it alamp unto my feet, <br>
											And a light unto my path, <br>
											I will hide His word in my heart, <br>
											That I may not sin against God!


										</p>
										<a href="#"><h4 id="toggle-btn3" class="text-center" style="color:white !important; font-size:0.8rem">… Read more …</h4></a>
									</div>
								</div>

								<!-- Single Featured Post -->
								<div class="single-blog-post small-featured-post d-flex ">
									<div class="post-data">
										<a href="#" class="post-catagory">5. PLEDGE TO TRUMPET SOUND ACADEMY</a>
										<p id="">
											I pledge to Trumpet Sound Academy, <br>
											To be one hundred percent for Jesus, in words and in deeds,<span id="elips4">...</span>  <br>
										</p>
										<p id="more-container4">
											By having a consecrated heart, educated mind and equipped hands, <br>
											Ever heavenly focused, never earthly useless,  So help me God!

										</p>
										<a href="#"><h4 id="toggle-btn4" class="text-center" style="color:white !important; font-size:0.8rem">… Read more …</h4></a>
									</div>
								</div>
							</div>
							<!-- ##### right side menu ends here #####  -->
						</div>
					</div>  
				</div>
				<br><br>

            @yield('lower-content')
			
			<div class="container">
				<a href="#fancy" class="info-request">
					<span class="holder">
						<span class="title">Request information</span>
						<span class="text">Want to know more? Fill the form and we will respond to you!</span>
					</span>
					<span class="arrow"></span>
				</a>
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
	<script>
		/*var toggle_btn = document.getElementById('toggle-btn')
		var more_container = document.getElementById('more-container')
		var toggle = 0
		toggle_btn.onclick = function(){
			//event.preventDefault()
			event.preventDefault()
			if(toggle == 0){
				more_container.style.display = 'block'
				more_container.style.opacity = '1'
				toggle = 1
				toggle_btn.innerText = '… Read Less …'
			}else if(toggle == 1 ){
				more_container.style.opacity = '0'
				more_container.style.display = 'none'
				toggle = 0
				toggle_btn.innerText = '… Read More …'
			}
		}*/

		$(document).ready(function(){
			var toggle_btn = document.getElementById('toggle-btn')
			var toggle_btn1 = document.getElementById('toggle-btn1')
			var toggle_btn2 = document.getElementById('toggle-btn2')
			var toggle_btn3 = document.getElementById('toggle-btn3')
			var toggle_btn4 = document.getElementById('toggle-btn4')

			$('#more-container').slideUp()
			$('#more-container1').slideUp()
			$('#more-container2').slideUp()
			$('#more-container3').slideUp()
			$('#more-container4').slideUp()

			var toggle = 0
			var toggle1 = 0
			var toggle2 = 0
			var toggle3 = 0
			var toggle4 = 0
			$('#toggle-btn').on('click', function(){
				event.preventDefault()
				if(toggle == 0){
					$('#more-container').slideDown()
					toggle_btn.innerText= '… Read Less …'
					$('#elips').hide()
					toggle = 1
				}else if(toggle == 1){
					$('#more-container').slideUp()
					toggle_btn.innerText= '… Read More …'
					$('#elips').show()
					toggle = 0
				}
			})

			$('#toggle-btn1').on('click', function(){
				event.preventDefault()
				if(toggle1 == 0){
					$('#more-container1').slideDown()
					toggle_btn1.innerText= '… Read Less …'
					$('#elips1').hide();
					toggle1 = 1
				}else if(toggle1 == 1){
					$('#more-container1').slideUp()
					toggle_btn1.innerText= '… Read More …'
					$('#elips1').show();
					toggle1 = 0
				}
			})

			$('#toggle-btn2').on('click', function(){
				event.preventDefault()
				if(toggle2 == 0){
					$('#more-container2').slideDown()
					toggle_btn1.innerText= '… Read Less …'
					$('#elips2').hide();
					toggle2 = 1
				}else if(toggle2 == 1){
					$('#more-container2').slideUp()
					toggle_btn2.innerText= '… Read More …'
					$('#elip2').show();
					toggle2 = 0
				}
			})

			$('#toggle-btn3').on('click', function(){
				event.preventDefault()
				if(toggle3 == 0){
					$('#more-container3').slideDown()
					toggle_btn3.innerText= '… Read Less …'
					$('#elip3').hide();
					toggle3 = 1
				}else if(toggle3 == 1){
					$('#more-container3').slideUp()
					toggle_btn3.innerText= '… Read More …'
					$('#elip3').show();
					toggle3 = 0
				}
			})

			$('#toggle-btn4').on('click', function(){
				event.preventDefault()
				if(toggle4 == 0){
					$('#more-container4').slideDown()
					toggle_btn4.innerText= '… Read Less …'
					$('#elips4').hide();
					toggle4 = 1
				}else if(toggle4 == 1){
					$('#more-container4').slideUp()
					toggle_btn4.innerText= '… Read More …'
					$('#elips4').show();
					toggle4 = 0
				}
			})

			$('#tsa').on('click', function(){
				document.getElementById('body').style.overflowY = "scroll"
			})
		})
	</script>
</body>
</html>
