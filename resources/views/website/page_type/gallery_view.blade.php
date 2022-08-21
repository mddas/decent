
	 

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
				<!-- Content Section -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">
				<!-- Gallery  -->
				<div class="gallery gallery-col3 gallery-grids gallery-lightbox hover-fade">
					<ul class="gallery-list">
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g2-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g2-lg.jpg" alt="Nature"></div>
							</a>
						</li>
						<li>
							<a href="image/gallery/g1-lg.jpg">
							<div class="gallery-item"><img src="image/gallery/g1-lg.jpg" alt="Nature"></div>
							</a>
						</li>
					</ul>
				</div>
				<!-- Gallery #end -->
			</div>
		</div>		
	</div>
	<!-- End Section -->
		  @endif
	 	<script src="js/jquery.bundle.js"></script>
		<!-- Theme Script init() -->
		<script src="js/script.js"></script>
		<!-- End script -->
    @endsection
    
