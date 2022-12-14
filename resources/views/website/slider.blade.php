	<div id="slider" class="banner banner-slider slider-large carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<!---start--->
	
				@foreach($sliders as $key=>$slider)
				<div class="item @if($key==0) active @endif">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url('{{$slider->banner_image}}');">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left light">
										<h2>{{$slider->caption}}<strong>.</strong></h2>
										<p>{{$slider->short_content}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!----close--->
		
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<!-- Brochure section-->
			<div class="brochure">
		        <a href="#"><i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>E-Brochure</a>
		    </div>
		    <!-- End Brochure section-->

		    <!-- Job Highlight section-->
			@if($jobs->count()>0)
		    <div class="job-highlight">
		        <div class="job-detail">
		        	<div class="owl-carousel loop job-carousel">
						@foreach($jobs as $job)					
							<div class="text">
								<h6>Helper Urgently Needed</h6>
								<span class="job_company">Company: {{$job->company_name}}</span>
								<span><i class="fa fa-map-marker"></i> {{$job->country}}</span>
								<p>Job Category: {{$job->navigation->caption}}
								<span class="job_company">Salary : Rs. {{$job->salary}} Monthly</span>
								<span>Contract : {{$job->contract_time}} Year(s)</span>
								<a href="{{route('jobapply',$job->navigation->nav_name)}}" class="btn btn-outline" target="_blank">Apply Now</a>
							</div>
						@endforeach
					</div>
				</div>
		    </div>

			@endif

		    <!-- End Highlight section-->
		</div>