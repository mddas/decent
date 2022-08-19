	<div id="slider" class="banner banner-slider slider-large carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<!---start--->
				@foreach($sliders as $slider)
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url('{{$slider->banner_image}}');">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text al-left pos-left light">
										<h2>{{$slider->caption}}<strong>.</strong></h2>
										<p>{{$slider->	short_content}}</p>
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
		    <div class="job-highlight">
		        <div class="job-detail">
		        	<div class="owl-carousel loop job-carousel">
						<div class="text">
							<h6>Helper Urgently Needed</h6>
							<span class="job_company">Company: Hotel Habibi</span>
							<span><i class="fa fa-map-marker"></i> Dubai</span>
							<p>Job Category Hotel / Resort</p>
							<span class="job_company">Salary : $ 600 Monthly</span>
							<span>Contract : 2 Year(s)</span>
							<a href="apply-form.html" class="btn btn-outline" target="_blank">Apply Now</a>
						</div>
						<div class="text">
							<h6>Helper Urgently Needed</h6>
							<span class="job_company">Company: Hotel Habibi</span>
							<span><i class="fa fa-map-marker"></i> Dubai</span>
							<p>Job Category Hotel / Resort</p>
							<span class="job_company">Salary : $ 600 Monthly</span>
							<span>Contract : 2 Year(s)</span>
							<a href="apply-form.html" class="btn btn-outline" target="_blank">Apply Now</a>
						</div>
						<div class="text">
							<h6>Helper Urgently Needed</h6>
							<span class="job_company">Company: Hotel Habibi</span>
							<span><i class="fa fa-map-marker"></i> Dubai</span>
							<p>Job Category Hotel / Resort</p>
							<span class="job_company">Salary : $ 600 Monthly</span>
							<span>Contract : 2 Year(s)</span>
							<a href="apply-form.html" class="btn btn-outline" target="_blank">Apply Now</a>
						</div>
					</div>
				</div>
		    </div>
		    <!-- End Highlight section-->
		</div>