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
	<title>Lab</title>
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

	<style>
.dropbtn {
  background-color:#f99104;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #f99104;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
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
					<a href="{{url('/patient_signout')}}" ><span></span> Sign Out</a>
					
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
							<li>
								<input type="checkbox" id="brand1" value="">
								<label for="brand1"><span></span>Remember me</label>
							</li>
						</ul>
						<a href="#">Forgot Password?</a><br>
						<div class="clearfix"></div>
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
	<section class="">
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
								<div class="dropdown">
  <button class="dropbtn">Category</button>
  <div class="dropdown-content">
  <a href="{{url('add_category')}}">Add Category</a>
  <a href="{{url('manage_category')}}">Manage Category</a>
 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Test</button>
  <div class="dropdown-content">
  <a href="{{url('/test')}}">Add Test</a>
  <a href="{{url('/manage_test')}}">Manage Test</a>
 
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Patinet</button>
  <div class="dropdown-content">
  <a href="{{url('/registered_patients')}}">Registered Patients</a>
  <a href="{{url('/verify_booking')}}">Verify Booking</a>
  <a href="{{url('/payment_details')}}">Payment Details</a>
 
  </div>
</div>
<div class="dropdown">
  <a href="{{url('/lab_profile')}}"><button class="dropbtn">Lab Profile</button></a>
</div>

							
								
								
								

								
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<div class="clearfix"></div>
		</div>