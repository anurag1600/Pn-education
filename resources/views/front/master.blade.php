<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>@yield("title")</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="{{url('css/studiare-assets.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/fonts/font-awesome/font-awesome.min.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{url('css/fonts/elegant-icons/style.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{url('css/fonts/iconfont/material-icons.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="top-line">
				<div class="container">
					<div class="row">
						@foreach($nav as $p)
						<div class="col-lg-6">
							<p><i class="material-icons">phone</i>{{$p->phone_no}} </p>
							<p><i class="material-icons">email</i> <span>{{$p->email}}</span></p>
						</div>
						<div class="col-lg-6">
							<div class="right-top-line">
								<ul class="top-menu">
									<li><a href="#">Purchase Now</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="blog.html">News</a></li>
								</ul>
								<button class="search-icon">
									<i class="material-icons open-search">search</i> 
									<i class="material-icons close-search">close</i>

								</button>

								<button class="shop-icon">
									<i class="material-icons">shopping_cart</i>
									<span class="studiare-cart-number">0 </span>

								</button>
								
								

							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

			<form class="search_bar">
				<div class="container">
					<input type="search" class="search-input" placeholder="What are you looking for...">
					<button type="submit" class="submit">
						<i class="material-icons">search</i>
					</button>
				</div>
			</form>

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
				@foreach($nav as $p)
					<img src="{{ url('/upload/'.$p->image) }}">
				@endforeach
					<a href="#" class="mobile-nav-toggle"> 
						<span></span>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="drop-link">
								<a class="active" href="{{url('/')}}">Home</a>
							</li>
							
							<li class="drop-link">
								<a href="{{url('courses')}}">Courses</a>
							</li>

							<li>
								<a href="{{url('ourteam')}}">Our Team</a>
							</li>

							<li>
								<a href="{{url('placement')}}">Placements</a>
							</li>

							<li>
								<a href="{{url('intern')}}">Interns</a>
							</li>


							<li>
								<a href="{{url('contect')}}">Contact</a>
							</li>
						</ul>
						<span><a href="{{url('front/signup')}}" class="register-modal-opener login-button">Sign up</a>     

				
						<a href="{{('front/login')}}" class="register-modal-opener login-button">Log in</a></span>
					</div>
				</div>
			</nav>

			<div class="mobile-menu">
				<div class="search-form-box">
					<form class="search-form">
						<input type="search" class="search-field" placeholder="Enter keyword...">
						<button type="submit" class="search-submit">
							<i class="material-icons open-search">search</i> 
						</button>
					</form>
				</div>
				<div class="shopping-cart-box">
					<a class="shop-icon" href="cart.html">
						<i class="material-icons">shopping_cart</i>
						Cart
						<span class="studiare-cart-number">0</span>
					</a>
				</div>
				<nav class="mobile-nav">

					<ul class="mobile-menu-list">
						<li>
							<a class="active" href="{{url('/')}}">Home</a>
						</li>
						
						<li>
							<a href="{{url('courses')}}">Courses</a>
						</li>
						
						<li>
							<a href="{{url('ourteam')}}">Our Team</a>
						</li>

						<li>
							<a href="{{url('placement')}}">Placements</a>
						</li>

						<li>
							<a href="{{url('intern')}}">Interns</a>
						</li>

						<li>
							<a href="{{url('contect')}}">Contact</a>
						</li>
					</ul>
					
				</nav>
				<button><a href="{{url('front/signup')}}" class="register-modal-opener login-button">Sign up</a></button>
				
				<button><a href="{{('front/login')}}" class="register-modal-opener login-button">Log in</a></button>
			</div>

		</header>
		<!-- End Header -->



@section("content")

@show



























<!-- footer 
			================================================== -->
		<footer>
			<div class="container">

				<div class="up-footer">
					<div class="row">
						@foreach($nav as $p)
						<div class="col-lg-4 col-md-6">
							<div class="footer-widget text-widget">
								<img src="{{ url('/upload/'.$p->image) }}">
								<p></p>
								<ul>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">location_on</i>
										</div>
										<div class="contact-info-value">{{$p->address}}</div>
									</li>
									<li>
										<div class="contact-info-icon">
											<i class="material-icons">phone_android</i>
										</div>
										<div class="contact-info-value">{{$p->phone_no}}</div>
									</li>
								</ul>
							</div>
						</div>
						@endforeach
						

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget quick-widget">
								<h2>Quick Links</h2>
								<ul class="quick-list">
									<li><a href="contact.html">Contact</a></li>
									<li><a href="pricing.html">Pricing Packages</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="courses.html">Courses</a></li>
									<li><a href="blog.html">News</a></li>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Sample Page</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">
							<div class="footer-widget subscribe-widget">
								<h2>Newsletter</h2>
								<p>Don’t miss anything, sign up now and keep informed about our company.</p>
								<div class="newsletter-form">
									<input class="form-control" type="email" name="EMAIL" placeholder="Enter Your E-mail" required="">
									<input type="submit" value="Subscribe">
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="footer-copyright copyrights-layout-default">
				<div class="container">
					<div class="copyright-inner">
						<div class="copyright-cell"> Copyright © 2021 |  <span class="highlight">PN INFOSYS IT COMPANY IN GWALIOR ! .</span>. All rights reserved. </div>
						<div class="copyright-cell">
							<ul class="studiare-social-links">
								<li><a href="#" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	
	<script src="{{url('js/studiare-plugins.min.js')}}"></script>
	<script src="{{url('js/jquery.countTo.js')}}"></script>
	<script src="{{url('js/popper.js')}}"></script>
	<script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en"></script>
	<script src="{{url('js/gmap3.min.js')}}"></script>
	<script src="{{url('js/script.js')}}"></script>

	<script>
		var tpj=jQuery;
		var revapi202;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_202_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_202_1");
			} else {
				revapi202 = tpj("#rev_slider_202_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "js/",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						onHoverStop: "off",
						arrows: {
					        enable: true,
					        style: 'gyges',
					        left: {
					            container: 'slider',
					            h_align: 'left',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: -60
					        },
					 
					        right: {
					            container: 'slider',
					            h_align: 'right',
					            v_align: 'center',
					            h_offset: 20,
					            v_offset: -60
					        }
					    },
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						bullets: {
 
					        enable: false,
					        style: 'persephone',
					        tmp: '',
					        direction: 'horizontal',
					        rtl: false,
					 
					        container: 'slider',
					        h_align: 'center',
					        v_align: 'bottom',
					        h_offset: 0,
					        v_offset: 55,
					        space: 7,
					 
					        hide_onleave: false,
					        hide_onmobile: false,
					        hide_under: 0,
					        hide_over: 9999,
					        hide_delay: 200,
					        hide_delay_mobile: 1200
 						}
					},
					responsiveLevels: [1210, 1024, 778, 480],
					visibilityLevels: [1210, 1024, 778, 480],
					gridwidth: [1210, 1024, 778, 480],
					gridheight: [700, 700, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "slidercenter",
						speed: 1000,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>	

	
</body>
</html>