@php
	$job_categories = app\Models\Navigation::query()->where('nav_category','Main')->where('page_type','Group')->where('banner_image','!=',null)->paginate(5);
    $global_setting = App\Models\GlobalSetting::all()->first();
	$normal_gallary_notice = app\Models\Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Photo Gallery')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
	if(isset($normal)){
        $seo = $normal;
    }
    elseif(isset($job)){
        $seo = $job;
    }
	if(isset($menus)){

	}
	else{
		 $menus = app\Models\Navigation::query()->where('nav_category','Main')->where('page_type','!=','Job')->where('page_type','!=','Notice')->where('parent_page_id',0)->where('page_status','1')->orderBy('position','ASC')->get();
	}
	
@endphp
<!DOCTYPE html>
<html lang="zxx">
<head>
			        <!-----SEO--------->

  <title>{{$seo->page_titile ?? $global_setting->page_title}}</title>
  <meta name="title" content="{{$seo->page_titile ?? $global_setting->page_title}}">
  <meta name="description" content="{{$seo->page_description ?? $global_setting->page_description}}">
  <meta name="keywords" content="{{$seo->page_keyword ?? $global_setting->page_keyword}}">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="revisit-after" content="1 days">
  <meta name="author" content="{{$global_setting->site_name ?? ''}}">


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{$global_setting->website_full_address ?? ''}}">
  <meta property="og:title" content="{{$seo->page_title ?? $global_setting->page_title}}">
  <meta property="og:description" content="{{$seo->page_description ?? $global_setting->page_description}}">
  <meta property="og:image" content="{{$seo->banner_image ?? '/uploads/icons/'.$global_setting->site_logo}}">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{$global_setting->website_full_address ?? ''}}">
  <meta property="twitter:title" content="{{$seo->page_title ?? $global_setting->page_title}}">
  <meta property="twitter:description" content="{{$seo->page_description ?? $global_setting->page_description}}">
  <meta property="twitter:image" content="{{$seo->banner_image ?? '/uploads/icons/'.$global_setting->site_logo}}">

<!-----END SEO------->
		<!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="/uploads/icons/{{$global_setting->favicon}}">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
							<span><a href="mailto:{{$global_setting->site_email}}">{{$global_setting->site_email}}</a></span>
						</li>
						<li class="t-phone t-phone1">
							<em class="fa fa-whatsapp" aria-hidden="true"></em>
							<span><a href="https://wa.me/{{$global_setting->phone}}" target="_blank">{{$global_setting->phone}}</a></span>
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
				<a class="navbar-brand" href="/">
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
						<li class="@if(!isset($slug_detail)) active @endif"><a href="/">Home</a></li>
						@foreach($menus as $menu)
							@php
								 $submenus = $menu->childs;						 
			
							@endphp
						<li class="dropdown @if(isset($slug_detail)==True && $slug_detail->nav_name == $menu->nav_name) active @endif"><a href="@if($menu->nav_name=='company') # @else /{{$menu->nav_name}} @endif">{{$menu->nav_name}}@if($submenus->count()>0) @if($menu->page_type=="Group") @endif <b class="caret"></b> @endif</a>							
							<ul class="dropdown-menu">
								@foreach($submenus as $key=>$submenu)
								  @if($key>=5) @break @endif								  
									<li><a href="/{{$menu->nav_name}}/{{$submenu->nav_name}}">{{$submenu->caption}}</a></li>								  
								  @endforeach
							</ul>							
						</li>
						@endforeach
						<li class="quote-btn"><a class="btn" href="/inquiry">Apply NoW</a></li>
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
								<p>{{$global_setting->page_description}}</p>
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
									@foreach($job_categories as $cat)
										<li><a href="/jobcategory/{{$cat->nav_name}}">{{$cat->caption}}</a></li>
									@endforeach
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
								  @foreach($menus as $menu)
									<li><a href="{{$menu->nav_name}}">{{$menu->caption}}</a></li>
								  @endforeach
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
								<p>{{$global_setting->website_full_address}}</p>
								<p><span>Mail</span>: <a href="mailto:{{$global_setting->site_email}}">{{$global_setting->site_email}}</a></p>
								<p><span>Phone</span>: <a href="tel:{{$global_setting->phone}}">{{$global_setting->phone}}</a><br> <a href="tel:{{$global_setting->phone_ne}}">{{$global_setting->phone_ne}}</a></p>
								<ul class="social">
									<li><a href="{{$global_setting->facebook}}"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="{{$global_setting->twitter}}"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="{{$global_setting->LinkedIn}}"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
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