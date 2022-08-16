
			


@extends('layouts.master')
    @section("content")
       
			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<!-- <div class="google-map-two">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.511178424314!2d85.281466!3d27.693948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe25fdd5d858e0cbe!2sKalanki%20Bus%20Stop!5e0!3m2!1sen!2snp!4v1657622982275!5m2!1sen!2snp" width="100%" height="368px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div> -->


			<!-- 
			=============================================
				Conatct us Section
			============================================== 
			-->
		
			<div class="contact-us-section section-spacing">
				<div class="container">
					<div class="theme-title-one">
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
			
					</div> <!-- /.theme-title-one -->


				<!----md---->
					<!------md----->
					<section class="sahid_contact_detail_raki mt-5 p-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Are You Interest To Contact With Us?</h2>
                <div class="add-contact mt-5">
                   @if(isset($contacts))
					@foreach($contacts as $cont)
                        <span class="call-us wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fas fa-map-marker-alt"></i><div class="contact_info_detail">
                                <h4>{{$cont->caption}}</h4>
                                <span><a href="#">{{$cont->long_content}}</a></span>
                            </div></span>
					@endforeach
					
					@else
					 	<span class="call-us wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fas fa-map-marker-alt"></i><div class="contact_info_detail">
                                <h4>Location</h4>
                                <span><a href="#">Nepal,9709823,kjsdl</a></span>
                            </div></span>
					@endif
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="contact_form">
                    <div role="form" class="wpcf7" id="wpcf7-f59-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <h3 class="section-title text-center">Make An Appointment</h3>
                       <form action="{{route('contactstore')}}" method="POST" class="theme-form-one form-validation" autocomplete="on" enctype='multipart/form-data'>
									 @csrf	
                    
                            <p><label class="mt-4">Name</label>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name">
                                </span>
                                
                            </p>
                            <p><label>Email</label>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email"  name="email">
                                </span>
                                
                            </p>
                            <p><label>Number</label>
                                <span class="wpcf7-form-control-wrap your-subject">
                                    <input type="text"  name="number">
                                </span>
                                
                            </p>
                            <p>
								<label>Message</label>
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea  name="message"></textarea>
                                </span>
                                </label></p>
								  <p>
                                <span class=""><label>Upload Resume</label>

                                    <input style="border:none;" type="file"  name="file">
                                </span>
                               
                            <p><button type="submit" class="theme-button-one">Submit</button></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			<!----md end---->
				<!---md end---->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us-section -->
@endsection

	