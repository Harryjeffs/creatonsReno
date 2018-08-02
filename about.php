<?php
	$page_title = "About"
?>
<!DOCTYPE html>
	<!--[if IE 7 ]>
	<html lang="en" class="no-js ie7"> <![endif]-->
	<!--[if IE 8 ]>
	<html lang="en" class="no-js ie8"> <![endif]-->
	<!--[if IE 9 ]>
	<html lang="en" class="no-js ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<html lang="en" class="no-js"> <!--<![endif]-->
	<?php include("inc/header.inc.php") ?>
	<body>

		<div class="wrapper" id="wrapper">
      		<div class="offcanvas-pusher">
	      		<div class="content-wrapper">
					<div class="container">
						<div class="row">
							<?php
								include 'inc/top-header.html';
							?>
						</div>

						<div class="row">
							<div class="inner-content">
								<div class="company">
									<div class="company-description pull-left">
										<h2>Creation Renovations</h2>
									<p>	Creaton Renovations has been in the building industry for over 25 years and we pride ourselves on delivering high quality solutions for all your renovation needs such as kitchen, bathrooms, laundries, decks and any other home improvement works.</p>

										<p>	Our staff  are friendly, professional  and highly skilled tradespeople. We treat your property with them same respect we treat our own properties and always leave it clean and tidy.</p>

										<p>	We offer competitive prices, we guarantee our work  and provide the highest quality of workmanship.</p>

										<p>	Many of our customers are repeat customers, or their neighbours and friends – testament to our excellent customer service and workmanship.</p>

									</div>
									<div class="company-thumb pull-right">
										<img src="img/about-1.jpg" alt="">
									</div>
								</div>
								<!-- company -->
							</div>
							<!--inner content -->
						</div>
						<!--section row -->
						<div class="row">
							<section class="call-to-action">
								<div class="row">
									<div class="col-md-4">
										<div class="action-serve">
											<h3>testimonal area</h3>
											<h4>Your Fabrication Need</h4>
											<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
										</div>
									</div>
									<!--	TESTIMONIAL SLIDER SECTION INSERT  -->
									<?php
									include ('inc/testimonial.php');
									?>
								</div>
							</section>
							<!-- .call-to-action -->
						</div>
						<!-- section row -->
						<div class="row">
							<?php
								include 'inc/footer.html';
							?>
						</div>
						<!-- .footer-section -->
					</div>
					<!-- .container-->
				</div>
				<!--content-wrapper-->
			</div>
        	<!-- offcanvas-pusher -->

	        <div class="offcanvas-menu offcanvas-effect visible-xs">
	          <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	          <div>
	            <div>
		            <ul id="menu">
		              <li><a href="index.html">Home</a></li>
				      <li><a href="about.html">About us</a></li>
				      <li><a href="service.html">Services</a></li>
				      <li><a href="contact.html">Contact us</a></li>
		            </ul>
	            </div>
	          </div>
	        </div>
	        <!-- offcanvas-menu end -->			
		</div>
		<!-- #wrapper -->


		<!-- =========================================
		JAVASCRIPT
		========================================== -->

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/hippo-off-canvas.js"></script>
		<script src="js/script.js?id=48"></script>
		<script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	</body>
	</html>