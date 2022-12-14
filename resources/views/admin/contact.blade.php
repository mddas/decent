@extends('layouts.master')
   @section('slider')
	    @include("website.banner")
    @endsection
@section('content')
		<div class="section section-contents section-contact bg-light section-pad">
		<div class="container">
			<div class="content row">

				<h2 class="heading-lg">Get in Touch</h2>
						@if(Session::has('contact'))
									<p class="alert alert-info">{{ Session::get('contact') }}</p>
						@endif
				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
						<form class="form-quote" action="{{route('contactstore')}}" method="post" enctype='multipart/form-data'>
							@csrf
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="name" type="text" placeholder="Name *" class="form-control required" required>
									</div>
									<div class="form-field col-md-6">
										<input name="subject" type="text" placeholder="Subject" class="form-control">
									</div>
								</div>
								<div class="form-group row">
									<div class="form-field col-md-6 form-m-bttm">
										<input name="email" type="email" placeholder="Email *" class="form-control required email">
									</div>
									<div class="form-field col-md-6">
										<input name="number" type="text" placeholder="Phone *" class="form-control required" required>
									</div>
								</div>

								<div class="form-group row">
									<div class="form-field col-md-12">
										<textarea name="-message" placeholder="Do you have any Queries?" class="txtarea form-control required"></textarea>
									</div>
								</div>
								<input type="text" class="hidden" name="form-anti-honeypot" value="">
								<button type="submit" class="btn">Submit</button>
								<div class="form-results"></div>
							</form>
					</div>
					<div class="contact-details col-md-4 col-md-offset-1">
						<ul class="contact-list">
							<li><strong class="color-primary ucap">Address</strong><br>
								@php echo $normal->short_content; @endphp
								<!-- <strong>Sunder Nagar Marg-3</strong><br>
								Basundhara, Kathmandu -->
							</li>
							<li><strong class="color-primary ucap">Phone</strong><br>
								@php echo $normal->long_content; @endphp
							</li>
							<li><strong class="color-primary ucap">Email</strong><br>
								<a href="mailto:{{$global_setting->site_email}}">{{$global_setting->site_email}}</a>
							</li>
						</ul>
						
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

	<div class="location-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.2683975985483!2d85.3295958154825!3d27.739866430668002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190065334937%3A0x1d6f41b5c693830b!2sDecent%20employment%20pvt.ltd!5e0!3m2!1sen!2snp!4v1657270849434!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

@endsection