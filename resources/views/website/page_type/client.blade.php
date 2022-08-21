@extends("layouts.master")
   @section('slider')
	    @include("website.banner")
    @endsection
   @section('content')
        	<!-- Content -->
	<div class="section section-contents section-pad about-sec">
		<div class="container">
			<div class="content row">
                @if($clients!=null)
                @foreach($clients as $client)
                    <div class="col-sm-3">
                        <div class="logo-item space-bottom"><img alt="" width="190" height="82" src="{{$client->banner_image}}"></div>
                    </div>
				@endforeach
                @endif
			</div>
		</div>
	</div>
	<!-- End content -->
  @endsection


    