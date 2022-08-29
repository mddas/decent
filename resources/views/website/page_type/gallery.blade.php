
 @extends("layouts.master")
   @section('slider')
	    @include("website.banner")
    @endsection
   @section('content')
    
	<!-- End Header -->
	<!-- Content Section -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">
				<!-- Gallery  -->
				<div class="gallery gallery-col3 gallery-grids gallery-lightbox hover-fade">
					<ul class="gallery-list">
            @foreach($photos as $photo)
              <li>
                <a href="/uploads/photo_gallery/{{$photo->file}}">
                <div class="gallery-item"><img src="/uploads/photo_gallery/{{$photo->file}}" alt="Nature"></div>
                </a>
              </li>
            @endforeach
					</ul>
				</div>
				<!-- Gallery #end -->
			</div>
		</div>		
	</div>
	<!-- End Section -->

  @endsection
