@extends('layouts.master')
@section('slider')
	 @include("website.banner")
@endsection
@section('content')
		<div class="section-pad">
		<div class="container">
			<div class="job-detail">
				<div class="row">
					<div class="col-md-12 res-m-bttm-sm">
						<div class="text">
							<h4>{{$job->navigation->caption}}</h4><a href="{{route('jobapply',$job->navigation->nav_name)}}" class="btn btn-outline apply-button">Apply Now</a>
                            <div class="row">                            
                            <div class="col-md-4">
                                <figure><img src="@if($job->navigation->banner_image!=null) {{$job->navigation->banner_image}} @else {{$job->navigation->parents->banner_image}} @endif" alt="job-titel" class="img-fluid"></figure>
                            </div>
							<div class="col-md-8">
							<p>@php echo $job->navigation->long_content; @endphp</p>
                            </div>
                            </div>
							<ul>
								<li>Job category : {{$job->navigation->parents->caption}}</li>
								<li>Company : {{$job->company_name}}</li>
								<li>Country : {{$job->country}}</li>
								<li>Salary : {{$job->salary}}</li>
								<li>Contract : {{$job->time_contract}} Year</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End content -->
@endsection

	
