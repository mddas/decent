	<div class="section-pad home-job bg-light">
		<div class="container">
			<h5 class="heading-sm-lead">Job</h5>
				<h2 class="heading-section">New Demand</h2>
			<div class="row">
				<!----start--->
				@if($jobs->count()>0)
				@foreach($jobs as $job)
				<div class="col-sm-12">
					<div class="job-detail">
						<div class="row flex align-item-center">
							<div class="col-md-3 res-m-bttm-sm">
								<div class="text">
									<h6>Helper Urgently Needed</h6>
									<span class="job_company">Company: {{$job->company_name}}</span>
								</div>
							</div>
							<div class="col-md-3 res-m-bttm-sm">
								<div class="text">
									<span><i class="fa fa-map-marker"></i>{{$job->country}}</span>
									<p>Job Category {{$job->parents->caption ?? ''}}</p>
								</div>
							</div>
							<div class="col-md-2 res-m-bttm-sm">
								<div class="text">
									<span class="job_company">Salary : Rs {{$job->salary}} Monthly</span>
									<span>Contract : {{$job->contract_time}} Year(s)</span>
								</div>
							</div>
							<div class="col-md-2 res-m-bttm-sm">
								<div class="text">
									<a href="{{route('single_job',$job->id)}}" class="btn btn-outline" target="_blank">View Detail</a>
								</div>
							</div>
							<div class="col-md-2 res-m-bttm-sm">
								<div class="text">
									<a href="{{route('jobapply',$job->parents)}}" class="btn btn-outline" target="_blank">Apply Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif
				<!----close---->
			</div>
		</div>
	</div>