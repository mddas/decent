	<div class="section section-contents section-pad image-on-right">
		<div class="container">
			<div class="row">
			
				<h5 class="heading-sm-lead">Our Services</h5>
				<h2 class="heading-section">What we do</h2>
				<div class="feature-intro">
					<div class="row">
						<div class="col-sm-7 col-md-6">
							<div class="row">
								<!----start---->
								@foreach($services as $service)
									<div class="col-sm-4">
										<div class="service-box">
										<div class="icon-box style-s1 photo-plx-full">
											<em class="fa fa-plane" aria-hidden="true"></em>
										</div>
										<h4>{{$service->caption}}</h4>
										</div>
									</div>
								@endforeach
							
								<!----close---->
							</div>
						</div>
					</div>

				</div>

			</div>			
		</div>
		<div class="section-bg imagebg"><img src="/website/image/photo-half-a.jpg" alt=""></div>
	</div>