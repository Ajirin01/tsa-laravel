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
	
	</header>
	<!-- / header -->
			
	<div class="slider">
				
		<ul class="bxslider">
			<li>
				<div class="container">
					<div class="info"><br>
						<div style="width: 100%; text-align: center" class="animate__animated animate__bounce animate__infinite">
							<span style="margin: 0 auto; font-size: 2rem; color: white" class="iconify" data-icon="icomoon-free:arrow-down"></span>
							 <br><small style="color:white">click {{$title}} to show more</small>
						</div>
						<a style="background: none !important" href="#down"><h2 id="title" style="cursor: pointer">{{$title}}</h2></a> 
					
						<marquee style="margin-top: -3%"> <h2><span>Molding lives into Christ-likeness</span></h2></marquee>
						<a download href="Application Form TSA General.pdf">Admission! Download Admission Form</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info"><br>
						<h2>TSA</h2> 
						<marquee style="margin-top: -3%"> <h2><span>Molding lives into Christ-likeness</span></h2></marquee>
						<a download href="Application Form TSA General.pdf">Admission! Download Admission Form</a>
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info"><br>
						<h2>TSA</h2> 
						<marquee style="margin-top: -3%"> <h2><span>Molding lives into Christ-likeness</span></h2></marquee>
						<a download href="Application Form TSA General.pdf">Admission! Download Admission Form</a>
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

<script>
	var down = "#down"
	var loc = window.location.href
	console.log(loc)
	if(loc.includes(down)){
		document.getElementById('body').style.overflowY = "scroll"
	}else{
		document.getElementById('body').style.overflowY = "hidden"
	}
	$('.slider').css('height','100vh')
	$('#title').on('click', function(){
		document.getElementById('body').style.overflowY = "scroll"
		$('.slider').css('height','600px')
		$('.slider').slideUp()

	})

    //$(document).ready(function(){
        $('#section-b').slideUp()
        $('#section-c').slideUp()
        $('#section-d').slideUp()
        $('#section-e').slideUp()
		$('#submit').hide()
		window.scrollTo(0,0)

        function goSectionB(){
            $('#section-a').slideUp()
            $('#section-b').slideDown()
            $('#section-c').slideUp()
            $('#section-d').slideUp()
            $('#section-e').slideUp()
			window.scrollTo(0,0)
        }

        function goSectionC(){
            $('#section-a').slideUp()
            $('#section-b').slideUp()
            $('#section-c').slideDown()
            $('#section-d').slideUp()
            $('#section-e').slideUp()
			window.scrollTo(0,0)
        }

        function goSectionD(){
            $('#section-a').slideUp()
            $('#section-b').slideUp()
            $('#section-c').slideUp()
            $('#section-d').slideDown()
            $('#section-e').slideUp()
			window.scrollTo(0,0)
        }

        /*function goSectionE(){
            $('#section-a').slideUp()
            $('#section-b').slideUp()
            $('#section-c').slideUp()
            $('#section-d').slideUp()
            $('#section-e').slideDown()
        }*/

        function reviewForm(){
            $('#section-a-btn').hide()
            $('#section-b-btn').hide()
            $('#section-c-btn').hide()
            $('#review-btn').hide()

            $('#section-a').slideDown()
            $('#section-b').slideDown()
            $('#section-c').slideDown()
            $('#section-d').slideDown()
			$('#submit').show()
            //$('#section-e').slideDown()
			window.scrollTo(0,0)
			
        }

		function getLGA(state_id){
			var url = '{{ route('get_lga', [':id']) }}';
			url = url.replace(':id', state_id);
			var lga = $('#lga_id');

			$.ajax({
				dataType: 'json',
				url: url,
				success: function (resp) {
					//console.log(resp);
					lga.empty();
					$.each(resp, function (i, data) {
						lga.append($('<option>', {
							value: data.id,
							text: data.name
						}));
					});
					// $('#lga-cont').empty()
					// document.getElementById('lga-cont').innerHTML = lga.innerHTML
				// lga = lga

				document.getElementById('lga-cont').innerHTML= '<select required data-placeholder="Select State First" class="select-search form-control" name="lga_id" id="lga_id">'+ lga[0].innerHTML+'</select>'
				console.log(lga[0])

				}
			})
			// lga.empty()
			

		}
    //})
</script>

<script>
		$(document).ready(function(){
			console.log("hello")

			function readURL(input,str,index){
				if(input.files && input.files[0]){
					var reader = new FileReader()
		
					reader.onload = function(e){
						var id = str+index
						// $(id).attr('src', e.target.result)
						document.getElementById(id).value = e.target.result
						console.log(document.getElementById(id).value)
		
					}
					reader.readAsDataURL(input.files[0])
				}
			}
	   
	  	 	var state = 0
	
			if(state == 0){
				$('#cer0').change(function(){
					readURL(this,'cer_el', 0)
				});
				state = 1
			}if(state == 1){
				$('#cer1').change(function(){
					readURL(this,'cer_el', 1)
				});
				state = 2
			}if(state == 2){
				$('#cer1').change(function(){
					readURL(this,'cer_el', 1)
				});
				state = 0
			}

			if(state == 0){
				$('#photo0').change(function(){
					readURL(this,'photo_el', 0)
				});
				state = 0
			}
	
		})
		
	</script>
</body>
</html>
