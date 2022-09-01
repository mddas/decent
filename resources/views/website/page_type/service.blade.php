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
                        <div class="col-sm-4 col-xs-6">
                            <div class="service-box">
                            <div class="icon-box style-s1 photo-plx-full">
                                <em class="{{$service->short_content}}" aria-hidden="true"></em>
                            </div>
                            <h4>{{$service->caption}}</h4>
                            </div>
                        </div>
                     @endforeach
				</div>
			</div>		
		</div>
	</div>
	<!-- End Content -->
      @endsection