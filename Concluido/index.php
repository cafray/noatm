<?php
include("includes/header.php");
 ?>

<body id="home">

	<!-- ****************************** Preloader ************************** -->

	<div id="preloader"></div>

	<!-- ****************************** Sidebar ************************** -->

	<nav id="sidebar-wrapper">
		<a id="menu-close" href="#" class="close-btn toggle"><i class="ion-ios-close-empty"></i></a>
	    <ul class="sidebar-nav">
		    <li><a href="#home">Home</a></li>
			<li><a href="#features">About</a></li>
			<li><a href="#gallery">Features</a></li>
					<li><a href="#contact">Contact us</a></li>
	    </ul>
	</nav>

	<!-- ****************************** Header ************************** -->

	<header class="sticky" id="header">
		<section class="container">
			<section class="row" id="logo_menu">
				<section class="col-xs-8"><a class="logo" href="">No-ATM</a></section>
				<section class="col-xs-4"><a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s"><i class="ion-navicon"></i></a></section>
			</section>
		</section>
	</header>

	<!-- ****************************** Banner ************************** -->


	<section id="banner" >
		<section class="container">
			<a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#features"><i class="ion-ios-download-outline"></i></a>
			<section class="row">
				<div class="col-md-6">
					<div class="headings">
						<h1 class="wow animated fadeInDown">Safe, Convenient and Secure way to move money</h1>
						<p class="wow animated fadeInLeft">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-5">
								<div>
									<a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-social-android"></i> Play Store</a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-5">
								<div>
									<a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-social-apple"></i> App Store</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-xs hidden-sm">
					<div class="hand-container">
					<img class="iphone-hand img_res wow animated bounceInUp" data-wow-duration="1.2s" src="assets/img/iphone_hand.png"></img>
					<div class="clearfix"></div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- ****************************** Features Section ************************** -->

	<section id="features" class="block">
		<section class="container">
			<section class="row">
				<div class="title-box"><h1 class="block-title wow animated rollIn">
				<span class="bb-top-left"></span>
				<span class="bb-bottom-left"></span>
				About
				<span class="bb-top-right"></span>
				<span class="bb-bottom-right"></span>
				</h1></div>
			</section>

			<section class="row">
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">


          	<i class="ion-ios-lightbulb-outline" style="color:#9b59b6;"></i>
						<h2>Pay Bills</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
						<i class="ion-iphone" style="color:#d35400;"></i>
						<h2>Buy Airtime</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
						<i class="ion-ios-cart" style="color:#00ceb8;"></i>
						<h2>Go Shopping</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
						<i class="ion-android-restaurant" style="color:#c0392b;"></i>
						<h2>Eat out</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
						<i class="ion-android-bus" style="color:#27ae60;"></i>
						<h2>Pay Transport</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
						<i class="ion-cash" style="color:#2c3e50;"></i>
						<h2>Money Market</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</section>
	</section>

	<!-- ****************************** Gallery Section ************************** -->

	<section id="gallery" class="block">
		<section class="container">
			<section class="row">
				<div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn">
				<span class="bb-top-left" style="border-color: #fff; "></span>
				<span class="bb-bottom-left" style="border-color: #fff; "></span>
				Features
				<span class="bb-top-right" style="border-color: #fff; "></span>
				<span class="bb-bottom-right" style="border-color: #fff; "></span>
				</h1></div>
			</section>
			<section class="row">
				<div class="col-xs-12">
					<div id="screenshots" class="owl-carousel owl-theme">
					  <div class="item"><img src="assets/img/screenshot-1.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-2.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-3.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-4.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-5.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-6.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-7.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-3.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-5.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="assets/img/screenshot-1.png" class="img_res wow animated zoomIn"></div>
					</div>
					 <div class="customNavigation">
					  <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="ion-ios-arrow-left"></i></a>
					  <a class="btn next gallery-nav wow animated bounceInRight"><i class="ion-ios-arrow-right"></i></a>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- ****************************** Team Section ************************** -->

  <!-- ****************************** Team Section ************************** -->


	<!-- ****************************** Testimonial ************************** -->

	<!-- ****************************** Testimonial ************************** -->

	<!-- ****************************** Subscribe Section ************************** -->

	<section id="subscribe">
		<section class="container">
			<section class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<p class="susbcribe-text">
					<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor</strong> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p>
				</div>
			</section>
		</section>
		<section class="container subscribe-wrap">
			<section class="row">
				<div class="col-sm-12">
					<div class="row">
						<form role="form">
							<div class="col-xs-10">
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
								</div>
							</div>
							<div class="col-xs-2">
								<button type="submit" class="btn-custom">
								<i class="ion-ios-arrow-thin-right"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- ****************************** Contact Section ************************** -->

	<section id="contact">
			<section class="container contact-wrap">
				<section class="row">
					<div class="title-box"><h1 class="block-title wow animated rollIn">
					<span class="bb-top-left"></span>
					<span class="bb-bottom-left"></span>
					Contact Us
					<span class="bb-top-right"></span>
					<span class="bb-bottom-right"></span>
					</h1></div>
				</section>
			</section>
			<section class="address">
				<div class="container">
					<div class="col-sm-12">
						<ul class="address-list">
							<li><i class="ion-ios-location" style="background-color: rgb(255, 102, 0);"></i> <span>1537 Flint Street <br>Tumon, MP 96911</span></li>
							<li><i class="ion-ios-telephone" style="background-color: #63cfea;"></i> <span>670-898-2847 </span></li>
							<li><i class="ion-email" style="background-color: #6ecba9;"></i> <span>info@no-atm.co.za</span></li>
							<li><i class="ion-earth" style="background-color: #ff6969;"></i> <span>www.no-atm.co.za</span></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="mailbox">
				<div class="container">
					<div class="col-sm-12">
						<form name="sentMessage" id="contactForm" novalidate>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
	                                    <p class="help-block text-danger"></p>
	                                    <div id="success"></div>
		                                <button type="submit" class="polo-btn contact-submit"><i class="ion-paper-airplane"></i></button>
	                                </div>
	                            </div>
	                        </div>
	                    </form>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</section>

		<!-- ****************************** Footer ************************** -->

		<section id="footer">
			<section class="container">
				<section class="row">
					<div class="col-sm-6">
						<span>Website By</span>
						<h1 class="footer-logo">
							<a href="#">No-ATM Development Team</a>
						</h1>
					</div>
					<div class="col-sm-6">
						<p class="copyright">All &copy; Copyright Reserved 2019</p>
					</div>
				</section>
			</section>
		</section>


	<!-- All the scripts -->

	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/owl.carousel.js"></script>
	<script src="assets/js/script.js"></script>

</body>
</html>
