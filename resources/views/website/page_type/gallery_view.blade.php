
	 

	@extends('layouts.master')
    @section("content")
			<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>Gallery</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				gallery
			============================================== 
			-->
			@if(isset($photos))
			<section class="section-spacing">
				<div class="container">
					<div class="gallery-view">
		                <div class="row" id="lightgallery"> 
							<!----gallary data----->
							@foreach($photos as $photo)
								<div class="item col-md-3" data-src="/uploads/photo_gallery/{{$photo->file}}" data-sub-html="{{$photo->caption}}">
									<h5>sdsjasdad lajsld</h5>
									<a href="">
										<img src="/uploads/photo_gallery/{{$photo->file}}" alt="{{$photo->caption}}"/>
										<div class="gallery-overlay"><img src="/website/images/plus.png"></div>
									</a>
								</div>
							@endforeach
						  <!----gallary data close----->
		                </div>
		            </div>
          		</div>
			</section>
		  @endif
		  
		  <!-- <script>
			  // $('#lightgallery').html('')
			
			  $.ajax({  
				type: 'GET',  
				url: '/get_gallery_photos', 
				data: { slug: "$slug" },
				success: function(data) {
					$.each( data, function( key, value ) {
							$('#lightgallery').append('<div class="item col-md-3" data-src="/uploads/photo_gallery/'+value['file']+'" data-sub-html="'+value['name']+'">\
									<a href="">\
										<img src="/uploads/photo_gallery/'+value['file']+'" alt="'+value['name']+'"/>\
										<div class="gallery-overlay"><img src="/website/images/home/plus.png"></div>\
									</a>\
								</div>')
						});
				}
			});
	    </script> -->
    @endsection
    
