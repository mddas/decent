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
										<h6>{{$job->caption}}title</h6>
										<span class="job_company">Company: {{$job->getJob->company_name}}</span>
										<span><i class="fa fa-map-marker"></i> Dubai</span>
										<p>Job Category Hotel / Resort</p>
									</div>
								</div>
								<div class="col-md-6 res-m-bttm-sm">
									<div class="text">
										<span class="job_company">Salary : $ 600 Monthly</span>
										<span>Contract : 2 Year(s)</span>
										<a href="{{route('jobapply',$job->navigation->nav_name)}}" class="btn btn-outline" target="_blank">Apply Now</a>
										<a href="/job-detail/{{$job->id}}" class="btn btn-outline" target="_blank">View Detail</a>
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

	