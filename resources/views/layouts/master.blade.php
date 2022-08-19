<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Decent Employment &#8211; Find Jobs easier and faster.</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="/website/image/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="/website/css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="/website/css/style.css">
</head>
<body class="site-body style-v1">
	<!-- Header --> 
	<header class="site-header header-s1 is-transparent is-sticky">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="top-aside top-left">
					<ul class="top-nav social">
						<li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
						<li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
						<li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
					</ul>
				</div>
				<div class="top-aside top-right clearfix">
					<ul class="top-contact clearfix">
						<li class="t-email t-email1">
							<em class="fa fa-envelope-o" aria-hidden="true"></em>
							<span><a href="mailto:info@decentemployment.com.np">info@decentemployment.com.np</a></span>
						</li>
						<li class="t-phone t-phone1">
							<em class="fa fa-whatsapp" aria-hidden="true"></em>
							<span><a href="https://wa.me/196565751161" target="_blank">+965-65751161</a></span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- #end Topbar -->
		<!-- Navbar -->
		<div class="navbar navbar-primary">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="index.html">
					<img class="logo logo-dark" alt="" src="/website/image/logo.jpg">
					<img class="logo logo-light" alt="" src="/website/image/logo-transparent.png" srcset="/website/image/logo-light2x.png 2x">
				</a>
				<!-- #end Logo -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Q-Button for Mobile -->
					<div class="quote-btn"><a class="btn" href="get-a-quote.html">Sign in</a></div>
				</div>
				<!-- MainNav -->
				<nav class="navbar-collapse collapse" id="mainnav">
					<ul class="nav navbar-nav">
						<li class="active"><a href="/">Home</a></li>
						@foreach($menus as $menu)
							<li><a href="{{$menu->nav_name}}">{{$menu->caption}}</a></li>
						@endforeach
						
						<li class="quote-btn"><a class="btn" href="apply-form.html">Apply NoW</a></li>
					</ul>
				</nav>     
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->
		<!-- Banner/Slider -->
		@yield('slider')
		<!-- #end Banner/Slider -->
	</header>
	<!-- End Header -->	
	<!-- top Section -->
    <!---about--->
	<!---service.blade.php--->
	<!---job_list.blade.php--->
	<!---partner.blade.php---->
	@yield('content')


	<!-- Footer Widget-->
	<div class="footer-widget style-v2 section-pad-md">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-text">
							<div class="wgs-content">
								<p><img src="/website/image/logo-transparent.png" srcset="image/logo2x.png 2x" alt=""></p>
								<p>We are registered and approved recruiting company by Nepal Government having Recruitment License Number 904/067/68.</p>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Jobs</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="job-list.html">Construction</a></li>
									<li><a href="job-list.html">Hotel / Resort</a></li>
									<li><a href="job-list.html">Security Field</a></li>
									<li><a href="job-list.html">Supermarkets</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-2 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Quick Links</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="inner.html">About Us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="contact.html">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">Get In Touch</h5>
							<div class="wgs-content">
								<p>
									Sunder Nagar Marg-3<br>
									Basundhara, Kathmandu</p>
								<p><span>Mail</span>: <a href="mailto:info@decentemployment.com.np">info@decentemployment.com.np</a></p>
								<p><span>Phone</span>: <a href="tel:97714385804">+977-14385804</a><br> <a href="tel:9779857089191">+977-9857089191</a></p>
								<ul class="social">
									<li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->

	<!-- Copyright -->
	<div class="copyright style-v2">
		<div class="container">
			<div class="row">
			
				<div class="row">
					<div class="site-copy col-sm-7">
						<p>&copy; 2022 Decent Employment.</p>
					</div>
					<div class="site-by col-sm-5 al-right">
						<p>Developed by <a href="http://radiantnepal.com/" target="_blank">Radiant Infotech</a></p>
					</div>
				</div>
				 				
			</div>
		</div>
	</div>
	<!-- End Copyright -->
	

	<!-- Preloader !active please if you want -->
	<!-- <div id="preloader"><div id="status">&nbsp;</div></div> -->
	<!-- Preloader End -->

	<!-- JavaScript Bundle -->
	<script src="/website/js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="/website/js/script.js"></script>
	<!-- End script -->
</body>
</html>