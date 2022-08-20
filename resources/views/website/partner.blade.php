	<!-- Client logo -->
	<div class="section section-logos">
		<div class="container">
			<div class="content row">

				<div class="owl-carousel loop logo-carousel style-v2">
					@foreach($partners as $partner)
						<div class="logo-item"><img alt="" width="190" height="82" src="{{$partner->banner_image}}"></div>
					@endforeach
				</div>

			</div>
		</div>	
	</div>
	<!-- End Section -->