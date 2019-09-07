<?php?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Mechanic Hero</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form action="http://webdesign-finder.com/">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your name" name="First name">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="password" name="sigpassword">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit" class="btn btn-small btn-maincolor log-btn">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
									<div class="mr-auto">
										<!--
							if you want to display toplogo info on smaller screens
							than use following CSS classes below:
						 	d-sm-flex justify-content-sm-center
						 -->
										<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
											<a href="index.html" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
											</a>
										</div>
									</div>
									<!--
						if you want to display toplogo info on smaller screens
						than use following CSS classes below:
						d-sm-flex justify-lg-content-end justify-content-sm-between align-items-center
					-->
									<div class="d-flex justify-lg-content-end align-items-center meta-icons">
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-email"></i>
											</div>
											<div class="media-body">
												<h6>Mail Us</h6>
												<p class="fw-400">
													Info@candycar.com
												</p>
											</div>
										</div>
										<div class="media d-none d-md-flex">
											<div class="icon-styled color-main fs-20">
												<i class="ico-placeholder"></i>
											</div>
											<div class="media-body">
												<h6>Location</h6>
												<p class="fw-400">
													Waukesha, WI 53186
												</p>
											</div>
										</div>
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-phone-call"></i>
											</div>
											<div class="media-body">
												<h6>Phone</h6>
												<p class="fw-400">
													+1 23 456 78 90
												</p>
											</div>
										</div>
										<div class="d-none d-xl-block">
											<a href="#" class="btn btn-small btn-outline-maincolor btn-appointment">Schedule Maintenance</a>
										</div>
									</div>
								</div>
								<!-- header toggler -->
							</div>
						</div>
					</div>
				</section>


				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
			
				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Motorist Registration</h1>
		
							</div>

						</div>
					</div>
				</section>


			</div>


			<section class="ls s-pt-55 s-pb-35 s-pt-lg-145 s-pb-lg-140 s-parallax s-overlay comingsoon">
				<div class="divider-40 d-none d-lg-block"></div>
				<div class="container">
					<form action="../controller/addMotorist.php" method="post">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="special-heading">
								Mechanic<span class="text-gradient">Hero!</span>
							</h2>
							<style> 
									.center {
												margin: auto;
												width: 50%;
												padding: 10px;
												border: 2px solid #ccc;
												background-color: #ffffff;
												}
											input[type=text] {
											  width: 50%;
											  margin: center;
											  padding: 12px 20px;
											  margin: 8px 0;
											  box-sizing: border-box;
												color: #ff4e3c;
											}
											</style>
							<div class="center">
									
							<input type="text" name ="firstname"id="firstname" placeholder="Firstname" required/>
							<input type="text" name="lastname" id="lastname" placeholder="Lastname"required/>
							<input type="text" name="email" id="email" placeholder="Email"required/>
							<input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" required/>
							<input type="text" name="address" id="address" placeholder="Address" required/>
							<input type="text" name="password" id="password" placeholder="Password" required/>
							<input type="text" name="c-password" id="c-password" placeholder="Confirm Password" required/>
							<br/>
							<br/>
							<button type="submit" id="btn-register" name="btn-register" class="btn btn-small btn-maincolor log-btn">Sign Up</button>
							</div>
							<!-- <h6 class="mt-0">Stay Tuned!</h6>		
							<div id="comingsoon-countdown"></div> -->
							<!--
					use "data-date" attribute with your date value to set date that you need to count to
					<div id="comingsoon-countdown" data-date="March 29, 2018 10:00:00"></div>
				-->
						</div>
					</div>
				</div>
				</form>
			</section>

			<section class="s-py-50 c-my-15 cs s-parallax s-overlay page_title">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-6 text-center">
							<h2>Subscribe to our News</h2>
						</div>

						<div class="col-lg-6 text-center">

							<div class="widget widget_mailchimp">


								<form class="signup" action="http://webdesign-finder.com/">
									<label for="mailchimp_email">
										<span class="screen-reader-text">Subscribe:</span>
									</label>

									<input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="Email">

									<button type="submit" class="search-submit">
										<span class="screen-reader-text">Subscribe</span>
									</button>
									<div class="response"></div>
								</form>

							</div>

						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<a href="index.html" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</div>
									<p class="media-body color-grey">2688 Simpson Avenue Harrisburg, PA 17109 </p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</div>

									<p class="media-body color-grey">+1 234 56 78</p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</div>
									<p class="media-body color-grey">
										<a href="mailto:">info@candycar.com</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
							<div class="widget widget_page_links">
								<h3>Useful Pages</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Contact Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Blog post</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>About Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Services</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
							<div class="widget widget_services_links">
								<h3>Services</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Exterior Hand Wash</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tower Hand Dry</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tire Dressing</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Wheel Shine</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
							<div class="widget widget_working_hours">
								<h3>Our Hours</h3>
								<ul>
									<li class="row">
										<div class="color-grey col-3">
											Mn-Fr
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 8.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sat
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 4.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sun
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">output</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>


			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
								<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>

</html>