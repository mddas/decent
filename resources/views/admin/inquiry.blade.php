@extends('layouts.master')
@section('content')
	
	<div class="section-pad mar-t150 bg-light">
		<div class="container">
			<div class="apply-form">
				<h3 class="heading-lg">Apply Form</h3>
				<form id="quote-request" class="form-quote" action="{{route('contactstore')}}" method="POST" enctype='multipart/form-data'>
					   @csrf
						<div class="form-group row">
							<div class="form-field col-md-6 form-m-bttm">
								<input name="name" type="text" placeholder="Name *" class="form-control required" required>
							</div>
							<div class="form-field col-md-6">
								<input name="apply_for" type="text" placeholder="Apply for..." class="form-control" value="{{$job_detail->caption ?? ''}}">
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
							<div class="form-field col-md-6">
								<input name="country" type="text" placeholder="country" class="form-control" value="{{$job_detail->caption ?? ''}}">
							</div>
							<div class="form-field col-md-6">
								<label>Upload Your Cv</label>
								<input type="file" class="form-control file-upload">
							</div>
						</div>
						<div class="form-group row">
							<div class="form-field col-md-12">
								<textarea name="message" placeholder="Messages *" class="txtarea form-control required"></textarea>
							</div>
						</div>
						<input type="hidden" name="id" class="hidden" name="form-anti-honeypot" value="{{$job_detail->getJob->id ?? ''}}">
						<button type="submit" class="btn">Submit</button>
						<div class="form-results"></div>
					</form>
			</div>
		</div>
	</div>
	<!-- End Content -->
@endsection
