	<!-- Banner/Static -->
		<div class="banner banner-static">
			<div class="banner-cpn bg-light">
				<div class="container">
					<div class="content row">
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="/">Home</a></li>
								<li><a href="{{$slug_detail->nav_name ?? ''}}">{{$slug_detail->caption ?? ''}}</a></li>
								@if(isset($slug_detail1))
									<li class="active"><span>{{$slug_detail1->caption}}</span></li>
								@endif
							</ul>
						</div>
						
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="/website/image/subheader.jpg" alt="" />
			</div>
		</div>