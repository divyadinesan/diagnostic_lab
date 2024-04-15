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