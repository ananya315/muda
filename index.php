<?php
error_reporting(0);

    $uname = $_GET['name'];
    $uemail = $_GET['email'];
    $umessage = $_GET['message'];

    $to = "ananyasrivastav315@gmail.com";
    $body = "";
    $body .= "From: ".$uname."\r\n";
    $body .= "From: ".$uemail."\r\n";
    $body .= "From: ".$umessage."\r\n";

    mail($to, $lpurpose, $body)
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">

	<!--====== Title ======-->
	<title>Mudda</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

	<!--====== Animate CSS ======-->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!--====== Line Icons CSS ======-->
	<link rel="stylesheet" href="assets/css/LineIcons.2.0.css">

	<!--====== Bootstrap CSS ======-->
	<link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css">

	<!--====== Style CSS ======-->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

	<!--====== PRELOADER PART START ======-->

	<div class="preloader">
		<div class="loader">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== PRELOADER PART ENDS ======-->

	<!--====== HEADER PART START ======-->

	<header class="header_area">
		<div id="header_navbar" class="header_navbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.html">
								<img id="logo" src="assets/images/Group 66.png" alt="Logo">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
								<ul id="nav" class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="page-scroll active" href="#home">Home</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#feature">Feature</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#how-work">How it Works</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#screenshots">Screenshots</a>
									</li>
									<li class="nav-item">
										<a class="page-scroll" href="#contact">Contact</a>
									</li>
								</ul>
							</div> <!-- navbar collapse -->
						</nav> <!-- navbar -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- header navbar -->
	</header>

	<!--====== HEADER PART ENDS ======-->

	<!--====== HERO PART START ======-->
	<section id="home" class="hero-area bg_cover" style="background: url('assets/images/hero-bg.png')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="hero-content">
						<h2 class="wow fadeInUp" data-wow-delay=".2s">Create Landing Page</br> for App or Software</h2>
						<p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
						<div class="hero-btns">
							<a href="#" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".45s">Download Now</a>
							<a href="#" class="watch-btn glightbox wow fadeInUp" data-wow-delay=".5s"> <i class="lni lni-play"></i> <span>Watch How It Works</span></a>
						</div>
					</div>
					<div class="counter-up">
						<div class="single-counter wow fadeInUp" data-wow-delay=".2s">
							<span id="secondo" class="countup" cup-end="120"></span>
							<span>Downloads</span>
						</div>
						<div class="single-counter wow fadeInUp" data-wow-delay=".3s">
							<span id="secondo" class="countup" cup-end="35"></span>
							<span>Users</span>
						</div>
						<div class="single-counter wow fadeInUp" data-wow-delay=".4s">
							<span id="secondo" class="countup" cup-end="7" cup-append="K"></span>
							<span>Reviews</span>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="hero-img">
						<img src="assets/images/phone3.png" alt="" class="wow fadeInRight" data-wow-delay=".2s">
						<img src="assets/images/phone 2.png" alt="" class="img-screen screen-1 wow fadeInUp" data-wow-delay=".25s">
						<img src="assets/images/phone 2.png" alt="" class="img-screen screen-2 wow fadeInUp" data-wow-delay=".3s">
						<img src="assets/images/phone1.png" alt="" class="img-screen screen-3 wow fadeInUp" data-wow-delay=".35s">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== HERO PART END ======-->

	<!--====== FEATURE PART START ======-->
	<section id="feature" class="feature-area pt-120">
		<div class="container">
			<div class="section-title">
				<h2 class="mb-60 wow fadeInUp" data-wow-delay=".2s">Awesome App <br> Features</h2>
			</div>
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-feature item-1 wow fadeInUp" data-wow-delay=".2s">
						<div class="feature-icon icon-style gradient-1">
							<i class="lni lni-protection"></i>
						</div>
						<div class="feature-content">
							<h4>Your Priceless Data is Secured</h4>
							<p>Lorem ipsum dolorc nsetetur sadipscing delitr, sesed diam nonumy eirmod.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-feature item-2 wow fadeInUp" data-wow-delay=".4s">
						<div class="feature-icon icon-style gradient-2">
							<i class="lni lni-notepad"></i>
						</div>
						<div class="feature-content">
							<h4>Super Easy to Use and Customize</h4>
							<p>Lorem ipsum dolorc nsetetur sadipscing delitr, sesed diam nonumy eirmod.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-feature item-3 wow fadeInUp" data-wow-delay=".6s">
						<div class="feature-icon icon-style gradient-3">
							<i class="lni lni-dashboard"></i>
						</div>
						<div class="feature-content">
							<h4>Performance Optimized</h4>
							<p>Lorem ipsum dolorc nsetetur sadipscing delitr, sesed diam nonumy eirmod.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="single-feature item-4 wow fadeInUp" data-wow-delay=".8s">
						<div class="feature-icon icon-style gradient-4">
							<i class="lni lni-laptop-phone"></i>
						</div>
						<div class="feature-content">
							<h4>Platform Independent</h4>
							<p>Lorem ipsum dolorc nsetetur sadipscing delitr, sesed diam nonumy eirmod.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== FEATURE PART ENDS ======-->

	<!--====== HOW-WORK PART START ======-->
	<section id="how-work" class="how-work-area pt-130">
		<div class="container">
			<div class="row">
			<div class="text-center">
			<h2>You are using Free Lite Version of Appi</h2>
			<p>Please, purchase full version of the template to get all sections, features and permission to use with commercial projects</p>
			</br>
			<a href="http://mudda.in" rel="nofollow" class="install-btn btn-hover wow fadeInUp" data-wow-delay=".45s" style="visibility: visible; animation-delay: 0.45s; animation-name: fadeInUp;">Login</a>
			<a href="http://mudda.in" rel="nofollow" class="install-btn btn-hover wow fadeInUp" data-wow-delay=".45s" style="visibility: visible; animation-delay: 0.45s; animation-name: fadeInUp;">Sign Up</a>	
		</div>
			</div>
		</div>
	</section>
	<!--====== HOW-WORK PART ENDS ======-->

	<!--====== CONTACT PART START ======-->
	<section id="contact" class="contact-area pt-130">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-10 mx-auto">
					<div class="section-title text-center">
						<h2 class="mb-60 wow fadeInUp" data-wow-delay=".2s">What Questions Do Our Customers
							Ask Most Often?</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<div class="faq-wrapper">
						<h3 class="mb-40 wow fadeInUp" data-wow-delay=".2s">Frequently Asked Questions</h3>
						<div class="faq-accordion accordion-style">
							<div class="accordion" id="accordionExample2">
								<div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".3s">
									<div class="accordion-btn">
										<button class="btn-block text-left collapsed" type="button" data-toggle="collapse"
											data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
											<span>What should I include in App?</span>
										</button>
									</div>

									<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample2">
										<div class="accordion-content">
											Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
											proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
											denim
											aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".4s">
									<div class="accordion-btn">
										<button class="btn-block text-left collapsed" type="button" data-toggle="collapse"
											data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
											<span>How does the Mobile app work?</span>
										</button>
									</div>

									<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample2">
										<div class="accordion-content">
											Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
											proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
											denim
											aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".5s">
									<div class="accordion-btn">
										<button class="btn-block text-left collapsed" type="button" data-toggle="collapse"
											data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
											<span>Does disabling apps free up space?</span>
										</button>
									</div>

									<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample2">
										<div class="accordion-content">
											Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
											proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
											denim
											aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
								<div class="single-accordion mb-30 wow fadeInUp" data-wow-delay=".6s">
									<div class="accordion-btn">
										<button class="btn-block text-left collapsed" type="button" data-toggle="collapse"
											data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
											<span>Can users choose to install the app?</span>
										</button>
									</div>

									<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample2">
										<div class="accordion-content">
											Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
											proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
											denim
											aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="contact-form-wrapper">
						<h3 class="mb-40 wow fadeInUp" data-wow-delay=".3s">Do You Have Any Question?</h3>
						<form action="#" method="post" class="contact-form wow fadeInUp" data-wow-delay=".4s">
							<input type="text" placeholder="Name" name="name" id="name" required>
							<input type="email" placeholder="Email" name="email" id="email" required>
							<textarea name="message" id="message" rows="4" placeholder="Message" required></textarea>
							<button class="btn-hover btn-block main-btn" type="submit">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== CONTACT PART ENDS ======-->

	<!--====== DOWNLOAD PART START ======-->
	<section class="download-area pt-150">
		<div class="container">
			<div class="download-wrapper bg_cover">
				<div class="row">
					<div class="col-xl-6 col-lg-6 offset-1 col-11">
						<div class="download-content">
							<div class="section-title">
								<h2 class="mb-30 text-white wow fadeInUp" data-wow-delay=".2s">Download the app now</h2>
								<p class="mb-40 text-white wow fadeInUp" data-wow-delay=".35s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diamnonumy eirmod tempor invidunt labore.</p>
							</div>
							<div class="download-btns">
								<a href="#" class="btn-hover download-btn mr-4 wow fadeInUp" data-wow-delay=".45s">
									<span class="icon gradient-2"><i class="lni lni-apple"></i></span>
									<span class="text">App Store <b>Download now</b></span>
								</a>
								<a href="#" class="btn-hover download-btn wow fadeInUp" data-wow-delay=".55s">
									<span class="icon gradient-1"><i class="lni lni-play-store"></i></span>
									<span class="text">Play Store <b>Download now</b></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xl-5 align-self-end col-lg-5 col-11 offset-1 offset-lg-0">
						<div class="download-img wow fadeInRight" data-wow-delay=".2s">
							<img src="assets/images/phone.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== DOWNLOAD PART ENDS ======-->

	<!--====== FOOTER PART START ======-->
	<footer id="footer" class="footer-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
						<a href="#" class="mb-35 d-block"><img src="assets/images/Group 67.png" alt=""> </a>
						<p class="mb-35">Lorem ipsum dolor sit aconsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.</p>
						<ul class="social-links">
							<li><a href="#" class="facebook"><i class="lni lni-facebook-original"></i></a></li>
							<li><a href="#" class="twitter"><i class="lni lni-twitter-original"></i></a></li>
							<li><a href="#" class="instagram"><i class="lni lni-instagram-original"></i></a></li>
							<li><a href="#" class="linkedin"><i class="lni lni-linkedin-original"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Feature</a></li>
							<li><a href="#">How it Work</a></li>
							<li><a href="#">Screenshots</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".6s">
						<h4>Product Help</h4>
						<ul>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Policy</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Team</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="footer-widget wow fadeInUp" data-wow-delay=".8s">
						<h4>Subscribe Newsletter</h4>
						<form
							action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate
							class="subscribe-form validate">

							<input type="email" name="EMAIL" id="EMAIL" class="required email" placeholder="Enter Mail Address">

							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
									name="b_4dbefd9d3a1d6a570020b1e85_e16d098ae8" tabindex="-1" value=""></div>
							<button id="subscribe" class="btn-hover main-btn text-right" type="submit">Submit</button>

						</form>
					</div>
				</div>
			</div>

			<div class="footer-cradit">
				<p class="text-center mb-0">Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
			</div>
		</div>
	</footer>
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->


	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>


	<!--====== wow js ======-->
	<script src="assets/js/wow.min.js"></script>

	<!--====== count-up js ======-->
	<script src="assets/js/count-up.min.js"></script>



	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>

</body>

</html>