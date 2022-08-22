@extends("layouts.master")
   @section('slider')
	    @include("website.banner")
    @endsection
   @section('content')
       	<!-- Content -->
	<div class="section section-contents section-pad image-on-right bg-light">
		<div class="container">
			<div class="feature-intro">
				<div class="row">
                    @foreach($services as $service)
                        <div class="col-sm-4">
                            <div class="service-box">
                            <div class="icon-box style-s1 photo-plx-full">
                                <em class="{{$service->caption}}" aria-hidden="true"></em>
                            </div>
                            <h4>{{$service->short_content}}</h4>
                            </div>
                        </div>
                     @endforeach
				</div>
			</div>		
		</div>
	</div>
	<!-- End Content -->
      @endsection