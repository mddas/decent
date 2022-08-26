@extends('layouts.master')
   @section('slider')
	    @include("website.banner")
    @endsection
@section('content')
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section-pad job-sec">
	    <div class="container">
	        <div class="content row">
				<!-- job Row  -->
				<div class="feature-row feature-service-row row feature-s4 off-text boxed-filled boxed-w">
					<!---start---->
					@foreach($job_categories as $cat)
					<div class="col-md-3 col-sm-4 col-xs-6 even">
						<!-- job box -->						
							<div class="feature">
									<a href="{{$cat->nav_name}}">
										<div class="fbox-photo">
											<img src="{{$cat->banner_image}}" alt="">
										</div>
										<div class="fbox-over">
											<h3 class="title">{{$cat->caption}}</h3>
											<div class="fbox-content">
												<p>{{$cat->short_content}}</p>
												<span class="btn">View Job</span>
											</div>
										</div>
									</a>
							 </div>
						</div>
					<!---end--->
					 @endforeach
				</div>
				<!-- job Row  #end -->

	        </div>
	    </div>
	</div>
	<!-- End content -->


@endsection
		