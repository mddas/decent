	<div class="section section-services section-pad">
	    <div class="container">
	        <div class="content row">
				<!-- Job Row  -->
				<div class="feature-row feature-service-row row feature-s4 off-text boxed-filled boxed-w">
					<div class="heading-box clearfix">
						<div class="col-sm-3">
							<h2 class="heading-section">Decent Employment</h2>
						</div>
						<div class="col-sm-8 col-sm-offset-1">
							<span>We are registered and approved recruiting company by Nepal Government having Recruitment License Number 904/067/68.</span>
						</div>
					</div>
					<!---start----->
					<div class="col-md-3 col-sm-4 col-xs-6 even">
						<!-- job box -->
						@foreach($job_categories as $cat)
						<div class="feature">
							<a href="#">
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
						<!-- End job box -->
					</div>
					@endforeach
					<!----close--->
					
					<div class="view-job">
						<a href="job-category.html" class="btn">View All</a>
					</div>				
				</div>
				<!-- Job Row  #end -->

	        </div>
	    </div>
	</div>