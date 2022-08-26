@extends('layouts.master')
@section('slider')
	 @include("website.banner")
@endsection
@section('content')
	<div class="section-pad">
		<div class="container">
			<div class="row">
				@foreach($jobs as $job)
					<div class="col-sm-6">
						<div class="job-detail">
							<div class="row">
								<div class="col-md-6 res-m-bttm-sm">
									<div class="text">
										<h6>{{$job}}</h6>
										<span class="job_company">Company: {{$job}}</span>
										<span><i class="fa fa-map-marker"></i> Dubai</span>
										<p>Job Category Hotel / Resort</p>
									</div>
								</div>
								<div class="col-md-6 res-m-bttm-sm">
									<div class="text">
										<span class="job_company">Salary : $ 600 Monthly</span>
										<span>Contract : 2 Year(s)</span>
										<a href="apply-form.html" class="btn btn-outline" target="_blank">Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach				
			</div>
		</div>
	</div>
	
@endsection

	