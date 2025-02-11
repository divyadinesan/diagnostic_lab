<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
	<title>Diagnostic Laboratory</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Sanatorium a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- default-css-files -->
	<link href="{{url('d_lab/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{url('d_lab/css/flexslider.css')}}" type="text/css" media="screen" />
	<link href="{{url('d_lab/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all">
	<!-- default-css-files -->
	<!-- Online fonts -->
	<link href="{{url('d_lab///fonts.googleapis.com/css?family=Oxygen:300,400,700')}}" rel="stylesheet">
	<!-- //Online fonts -->
	<!-- style.css-file -->
	<link href="{{url('d_lab/css/style.css')}}" rel='stylesheet' type='text/css' />
	<!-- //style.css-file -->
</head>
<!-- Head -->

<body>
	<!--header-section-starts-here-->
	<header>
		<div class="top-header" id="home">
			<div class="container">
				<div class="col-md-8 col-sm-8 col-xs-8 top-left">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> ATEES Industrial Training Pvt Ltd</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 top-right">
					<a href="#" data-toggle="modal" data-target="#myModal1"><span></span> Sign In</a>
					<a href="#" data-toggle="modal" data-target="#myModal2"><span></span> Sign Up</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!--//header-section-end-here-->
	<!-- popup for sign in form -->
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog1" class="mfp-hide book-form">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3>Sign In </h3>
					<form action="{{url('Login_check')}}" method="post">
						{{csrf_field()}}
						<input type="email" name="Email" class="email" placeholder="Email" required="" />
						<input type="password" name="Password" class="password" placeholder="Password" required="" />
						<ul>
							
						</ul>
						
						<input type="submit" value="Sign In">
					</form>
					<div class="w3ls-or">
						<p>Or</p>
					</div>
					<div class="top-middle w3ls-sma">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- //popup for sign in form -->
	<!-- popup for sign up form -->
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div id="small-dialog2" class="mfp-hide book-form">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3>Sign Up</h3>
					<form action="{{url('patient_insert')}}" method="post">
						{{csrf_field()}}
						<input type="text" name="Name" placeholder="Your Name" required="" />
						<input type="email" name="Email" class="email" placeholder="Email" required="" />
						<input type="text" name="phone" placeholder="Your Phone Number" required="" />
						<input type="text" name="address" placeholder="Your Address" required="" />
						<input type="password" name="Password" id="password1" class="password" placeholder="Password" required="" />
						
						
						<input type="submit" value="Sign Up">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //popup for sign up form -->
	<!--banner-section-starts-here-->
	<section class="banner jarallax">
		<div class="navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					</div>
					<div class="logo">
						<h1><a class="navber-brand" href="index.html"><i class="fa fa-heartbeat" aria-hidden="true"></i> D-LaB</a></h1>
					</div>
					<div class="collapse navbar-collapse navbar-right navigation-right" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-3 w3ls-navma" id="link-effect-3">
							<ul class="nav1 navbar-nav nav nav-wil">
								<li class="active"><a data-hover="Home" href="{{url('Lab')}}">Home</a></li>
								<!-- <li><a data-hover="appointment" href="#appointment" class="scroll">appointment</a></li> -->
								<li><a data-hover="Services" href="#services" class="scroll">Services</a></li>
								<!-- <li><a data-hover="Staff" href="#staff" class="scroll">Staff</a></li> -->
								
								<li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>
								<li><a data-hover="lab" href="{{url('Laboratory_login')}}" >lab</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="w3ls_banner_info">
			<div class="container">
				<div class="w3l-banner-grids">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides" id="slider4">
								<li>
									<div class="w3ls-text">
										<h3>welcome to D-LaB</h3>
										<h3> the right potential</h3>
										<p>Cras ultrices lorem a hendrerit condim</p>
									</div>
								</li>
								<li>
									<div class="w3ls-text">
										<h3>Good hospitality</h3>
										<h3>super services</h3>
										<p>Proin convallis leo vitae ligula portti</p>
									</div>
								</li>
								<li>
									<div class="w3ls-text">
										<h3>healthy environment</h3>
										<h3>with clean & Green</h3>
										<p>Cras ultrices lorem a hendrerit condim</p>
									</div>
								</li>
								<li>
									<div class="w3ls-text">
										<h3>best treatment and </h3>
										<h3> good care</h3>
										<p>Cras ultrices lorem a hendrerit condim</p>
									</div>
								</li>
							</ul>
						</div>

					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
	<!--about-section-starts-here-->
	<!-- <section class="about" id="appointment">
		<div class="container">
			<h2>appointment</h2>
			<div class="about-grids">
				<div class="col-md-3 col-sm-3 col-xs-3 abt-lt-grid text-center">
					<h4>our timing</h4>
					<p>Monday-Saturday</p>
					<p>7am-10pm</p>
					<p>Sunday(no appointment)</p>
					<p class="ma-p"><i class="fa fa-phone" aria-hidden="true"></i>+16 33 44 2345</p>

				</div>
				<div class="col-md-9 col-sm-9 col-xs-9 abt-rt-grid">
					<div class="w3ls-grid-head text-center">
						<h6>appointment</h6>
						<h3>online booking</h3>
					</div>
					<div class="abt-form text-center">
						<form action="#" method="post">
							<div class="col-sm-4 col-xs-4 w3ls-lt-form">
								<div class="w3ls-pr">
									<input type="text" name="Division" placeholder="Division" required="required">
									<input type="text" name="Name" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4 w3ls-lt-form">
								<div class="w3ls-pr">
									<input type="date" name="date" required="required">
									<input type="tel" name="phone no" placeholder="Phone no" required="required">
								</div>
							</div>
							<div class="col-sm-4 col-xs-4 w3ls-lt-form">
								<div class="w3ls-pr">
									<input type="time" name="time" required="required">
									<input type="email" name="email" placeholder="Email" required="required">
								</div>
							</div>
							<div class="clearfix"></div>
							<input type="submit" value="Book Now">

						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section> -->
	<!--//about-section-end-here-->
	<!-- /services -->
	<section class="contact-map" id="contact">
		<div class="container">
			<div class="w3ls-con-map-main-grids">
				<div class="col-md-6">
					<div class="w3ls-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24561.4917541168!2d-74.26553697858265!3d39.69051118517855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c107b00044297b%3A0x9354ddfde6a7883b!2sManahawkin%2C+Stafford+Township%2C+NJ+08050%2C+USA!5e0!3m2!1sen!2sin!4v1486031546252"
						    allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<div class="wthree-contact-left-grid">
						<div class="contact-head">
							<h4>contact us </h4>
							<div class="information">
								<ul class="agile-inf">
									<li><i class="fa fa-home" aria-hidden="true"></i>11/665 postal street, park avenue,USA</li>
									<li><i class="fa fa-phone" aria-hidden="true"></i>+040 6656 776 665</li>
									<li><i class="fa fa-envelope" aria-hidden="true"></i><a class="w3ls-a" href="mailto:example@email.com"> mail@example.com</a></li>
									<li><i class="fa fa-globe" aria-hidden="true"></i><a class="w3ls-a" href="mailto:example@email.com">www.example.com</a></li>
								</ul>
							</div>

							<div class="contact-form-w3ls">
								<form action="#" method="post">
									<div class="col-sm-6 col-xs-6 w3ls-ma">
										<input type="text" placeholder="Name" required="required" />
									</div>
									<div class="col-sm-6 col-xs-6 w3l-ma">
										<input type="email" placeholder="E-mail" required="required" />
									</div>
									<div class="clearfix"></div>
									<textarea placeholder="Message" required="required"></textarea>
									<input type="submit" value="send" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</section>
	<div class="agile_secives jarallax" id="services">
		<div class="container">
			<h3>What we Do</h3>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-eye" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Emergency Unit</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat..</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-ambulance" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Emergency Help</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat..</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-medkit" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Health Care</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat..</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-flask" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Research</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat..</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-line-chart" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Lab Test Reports</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat..</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Visiting Hours</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat..</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!--team-section-end-here-->
	<!-- <section class="team" id="staff">
		<div class="container">
			<h3>staff </h3>
			<div class="agile-team-grids">
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t1.jpg')}}" alt="image" class="img-responsive" />
						<h4>williamson</h4>
						<h5>director</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t2.jpg')}}" alt="image" class="img-responsive" />
						<h4>fisher</h4>
						<h5>Nurse</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t3.jpg')}}" alt="image" class="img-responsive" />
						<h4>jesse</h4>
						<h5>co.director</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t4.jpg')}}" alt="image" class="img-responsive" />
						<h4>riley</h4>
						<h5>doctor</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t5.jpg')}}" alt="image" class="img-responsive" />
						<h4>olivia</h4>
						<h5>nurse</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t6.jpg')}}" alt="image" class="img-responsive" />
						<h4>patrick</h4>
						<h5>doctor</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t7.jpg')}}" alt="image" class="img-responsive" />
						<h4>garrett</h4>
						<h5>doctor</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3 agile-w3ls">
					<div class="team-grid text-center">
						<img src="{{url('d_lab/images/t8.jpg')}}" alt="image" class="img-responsive" />
						<h4>alvarez</h4>
						<h5>nurse</h5>
						<div class="social-icons-tm">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</section> -->
	<!--//team-section-end-here-->
	<!-- <section class="grid-gallery" id="grid-gallery">
		<div class="container">
			<h3 class="title text-center">Lab</h3>
			<section class="grid-wrap">
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l1.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l2.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l3.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid project_icon">
							<img src="{{url('d_lab/images/l3.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l4.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l5.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid project_icon">
							<img src="{{url('d_lab/images/l5.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l6.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l6.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l7.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l7.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l8.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l8.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l9.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l9.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l10.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l10.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l11.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l11.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="col-md-3 agileinfo_portfolio_grid">
					<a href="images/l12.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="agileits_portfolio_grid">
							<img src="{{url('d_lab/images/l12.jpg')}}" alt=" " class="img-responsive" />
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>

			</section>
			 
		</div>

	</section> -->
	<!-- //laboratory-section -->
	<!--testimonial-section-starts-here -->
<!-- 	<section class="testimonial jarallax">
		<div class="container">
			<h3>testimonial</h3>
			<div class="testi-grid">
				<div class="col-md-6 col-sm-6 col-xs-6 w3ls-text-grid">
					<h4>our staff believe our work and good humanity</h4>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 fslider-grid">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="testi-w3ls text-center">
									<div class="testi-text">
										<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris consectetur
											nisl hendrerit dapibus bibendum. Mauris in purus fringilla, bibendum dui vel, mattis arcu.
										</p>
									</div>
									<div class="testi-img">
										<img src="{{url('d_lab/images/ts1.jpg')}}" alt="images" />
										<h5>Angle</h5>
										<h6>subtitle</h6>
									</div>
								</div>
							</li>
							<li>
								<div class="testi-w3ls text-center">
									<div class="testi-text">
										<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris consectetur
											nisl hendrerit dapibus bibendum. Mauris in purus fringilla, bibendum dui vel, mattis arcu.
										</p>
									</div>
									<div class="testi-img">
										<img src="{{url('d_lab/images/ts2.jpg')}}" alt="images" />
										<h5>Jesse</h5>
										<h6>subtitle</h6>
									</div>
								</div>
							</li>
							<li>
								<div class="testi-w3ls text-center">
									<div class=" testi-text">
										<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris consectetur
											nisl hendrerit dapibus bibendum. Mauris in purus fringilla, bibendum dui vel, mattis arcu.
										</p>
									</div>
									<div class="testi-img">
										<img src="{{url('d_lab/images/ts3.jpg')}}" alt="images" />
										<h5>Rosse lee</h5>
										<h6>subtitle</h6>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section> -->
	<!--testimonial-section-end-here -->

	<!--contact-section-end-here-->
	
	<!--//contact-section-end-here-->
	<!--footer-section-end-here-->
	<section class="footer-top jarallax">
		<div class="container">
			<div class="footer-grids">
				<div class="w3ls-top-ft text-center">
					<span>get to know</span>
					<h3>D-LaB</h3>
					<p>diagnostic laboratory means a workplace where diagnostic or other screening procedures are performed on blood or other potentially infectious materials</p>
					<div class="srv-w3ls">
						<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="w3ls-bt-ft">
					
				</div>
				<div class="footer-bottom">
					<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
							<p class="footer-gd">@2024 |D-LaB |Laravel Framework |<a href="https://atees.org/" target="_blank">ATEES Industrial Training Pvt Ltd</a></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">D-Lab</h4>
				</div>
				<div class="modal-body agileits">
					<div class="modal-img">
						<img src="{{url('d_lab/images/md.jpg')}}" alt="image">
					</div>
					<p>D-LAB is a NABL and CAP accredited pathology lab in Thrissur. We are a leading diagnostic company with 170+ pathology labs and1500+ collection centres across India. We provide 4000+ tests and health checkup packages that are tailored to your healthcare needs. Our blood test lab in Thrissur is staffed with skilled healthcare professionals who excel in providing best customer experience with meticulous analysis and diagnoses. Our Diagnostic center in Thrissur offers home visit facilities, providing you with ease of sample collection in the comfort of your home. Metropolis Healthcare lab in Thrissur is equipped to conduct specialised and semi specialised tests of Oncology, Neurology, Gynecology and many more."</p>
				</div>
			</div>
		</div>
	</div>
	<!--//Modal -->
	<!--//footer-section-end-here-->
	<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="{{url('d_lab/js/jquery-2.1.4.min.js')}}"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->


	<script src="{{url('d_lab/js/responsiveslides.min.js')}}"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--banner Slider starts Here-->
	<script type="text/javascript" src="{{url('d_lab/js/modernizr.custom.79639.js')}}"></script>
	<!-- //Default-JavaScript-File -->
	<!-- gallery-pop-up -->
	<script src="{{url('d_lab/js/jquery.chocolat.js')}}"></script>
	<link rel="stylesheet" href="{{url('d_lab/css/chocolat.css')}}" type="text/css" media="screen">
	<!--light-box-files -->
	<script type="text/javascript">
		$(function () {
			$('.agileinfo_portfolio_grid a').Chocolat();
		});
	</script>
	<!-- //gallery-pop-up -->

	<!-- FlexSlider -->
	<script defer src="{{url('d_lab/js/jquery.flexslider.js')}}"></script>
	<script type="text/javascript">
		$(function () {});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- FlexSlider -->
	<!-- start-smoth-scrolling-nav -->
	<script type="text/javascript" src="{{url('d_lab/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{url('d_lab/js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function () {
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 100,
				easingType: 'linear'
			};
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->
	<!-- jarallax scrolling -->
	<script src="{{url('d_lab/js/jarallax.js')}}"></script>
	<script src="{{url('d_lab/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax scrolling -->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="{{url('d_lab/js/bootstrap-3.1.1.min.js')}}"></script>
</body>

</html>