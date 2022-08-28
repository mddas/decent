<div class="section section-content section-pad bg-light">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-md-6 res-m-bttm">
						<h5 class="heading-sm-lead">{{$about->caption ?? ''}}</h5>
						<h2 class="heading-section">{{$about->caption ?? ''}}</h2>
						<p>@php echo $about->long_content ?? '' @endphp</p>
						<a href="/about-us" class="btn">Read More</a>
					</div>  
					<div class="col-md-5 col-md-offset-1">
						<img class="no-round" src="{{$about->banner_image ?? ''}}" alt="">
					</div>
				</div>
				
			</div>	
		</div>
	</div>