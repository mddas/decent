@extends("layouts.master")
   @section('slider')
	    @include("website.banner")
    @endsection
   @section('content')
   <section class="inner-page">
      <div class="container">
            @php echo $normal->long_content; @endphp
      </div>
   </section>
		
  @endsection


    