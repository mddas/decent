@extends("layouts.master")
   @section('slider')
	    @include("website.banner")
    @endsection
   @section('content')
		@php echo $normal->long_content; @endphp
  @endsection


    