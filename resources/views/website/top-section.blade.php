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
					@php $index = 0; @endphp
					@foreach($job_categories as $cat)
						@if($index>=5) @break @endif
					<div class="col-md-3 col-sm-4 col-xs-6 even">
						<!-- job box -->						
						<div class="feature">
							<a href="/jobcategory/{{$cat->nav_name}}">
								<div class="fbox-photo">
									<img src="{{$cat->banner_image}}" alt="">
								</div>
								<div class="fbox-over">
									<h3 class="title">{{$cat->caption}} {{$index}}</h3>
									<div class="fbox-content">
										<p>{{$cat->short_content}}</p>
										<span class="btn">View Job</span>
									</div>
								</div>
							</a>
						</div>
						<!-- End job box -->
					</div>
						@php $index++; @endphp
					@endforeach
					<!----close--->
					
					<div class="view-job">
						<a href="/jobcategory" class="btn">View All</a>
					</div>				
				</div>
				<!-- Job Row  #end -->

	        </div>
	    </div>
	</div>