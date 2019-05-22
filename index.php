

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Pets Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!-- easy-responsive-tabs -->

	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Junge" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo">
			<div class="banner-top w3layouts">
				<div class="container">
					<ul class="agile_top_section">
						<li>
							<!--<p>animal infomation zone!</p> -->
						</li>
						<li>
							<p><span class="glyphicon glyphicon-earphone"></span> +88 01681 186911 </p>
						</li>
						<li><a class="sign" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>							</li>
					</ul>
				</div>
			</div>
			

			<?php
			if(isset($_SESSION['message'])){
				echo $_SESSION['message'];
			}
			?>

			
			<div class="banner-w3text w3layouts">
				<h3 class="w3ls_agile">New Helping Hand</h3>
				<h2>Animal Care Zone</h2>
			</div>
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="agile_inner_nav_w3ls">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php">Pets Care</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-left">
							<ul class="nav navbar">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="Medicare.php">Medicare</a></li>
								<li><a href="Catagories.php">Catagories</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Products</span><span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="foods.php">Foods</a></li>
										<li><a href="accessories.php">Accessories</a></li>
									</ul>
								</li>
								<li><a href="about.php">About</a></li>
							</ul>
						</div>
						<div class="w3ls-bnr-icons social-icon navbar-right">
							<a href="https://twitter.com/InfoanimalInfo"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/Animal-Information-zone-121638088549277/" class="social-button facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://plus.google.com/u/0/" class="social-button google"><i class="fa fa-google-plus"></i></a>
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- //banner -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>
						<div class="login-form">
<!--   sign in-->			<form action="View/logprocess.php" method="post">
								<input type="text" name="username" placeholder="User Name" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
<!--   sign up-->	<h3 class="agileinfo_sign">Sign Up</h3>
						<div class="login-form">
							<form action="View/process.php" method="post">
								<input type="text" name="user" placeholder="Username" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" class="password" name="p" id="password1" placeholder="Password" required="" />
								<input type="password" class="password" name="c" id="password2" placeholder="Confirm Password" required=""
								/>
								<input type="submit" value="Sign Up" name="sineup">
							</form>
						</div>
						<p><a href="#"> By clicking register, I agree to your terms</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	

	<!-- about -->
	<div class="services">
		<div class="container">
			<h3 class="agileits-title">Need More Services?</h3>
			<div class="top_tabs_agile">
				<div id="horizontalTab" class="top_tabs_agile">
					<ul class="resp-tabs-list">
						<li>
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Dog Health Care
						</li>
						<li>
							<i class="fa fa-random" aria-hidden="true"></i> Pet Vaccinations
						</li>
						<li>
							<i class="fa fa-cogs" aria-hidden="true"></i> Support Adoption
						</li>
						<li>
							<i class="fa fa-shield" aria-hidden="true"></i>Pet Barber Service
						</li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab1">
							<div class="services-right-agileits">
								<h4>Dog Health Care</h4>
								<p class="para-agileits-w3layouts">Dog is dog. it is a animale.</p>
								<a href="medicare.php" class="button button-isi"><span>Read More </span><i class="icon glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>

						<div class="tab2">
							<div class="services-right-agileits bar-grids bargrids-left">
								<h4>Pet Vaccinations </h4>
								<h6>Vaccination 1 <span> 80% </span></h6>
								<div class="progress">
									<div class="progress-bar progress-bar-striped active" style="width: 80%">
									</div>
								</div>
								<h6>Vaccination 2 <span> 70% </span></h6>
								<div class="progress  w3-agile">
									<div class="progress-bar progress-bar-striped active" style="width: 70%">
									</div>
								</div>
								<h6>Vaccination 3<span>90% </span></h6>
								<div class="progress  w3-agile">
									<div class="progress-bar progress-bar-striped active" style="width: 90%">
									</div>
								</div>
								<h6>Vaccination 4<span> 75% </span></h6>
								<div class="progress  w3-agile prgs-w3agile-last">
									<div class="progress-bar progress-bar-striped active" style="width: 75%">
									</div>
								</div>
							</div>

						</div>
						<div class="tab3">
							<div class="services-right-agileits img-top">
								<h4>Support Adoption</h4>
								<p class="para-agileits-w3layouts">dog is dog.</p>
								<a href="medicare.php" class="button button-isi"><span>Read More </span> <i class="icon glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>
						<div class="tab4">
							<div class="services-right-agileits">
								<h4>Pet Barber Service</h4>
								<p class="para-agileits-w3layouts">Pet care zone</p>
								<a href="medicare.php" class="button button-isi"><span>Read More </span> <i class="icon glyphicon glyphicon-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- w3-agilesale -->
	<div class="w3-agilesale welcome">
		<div class="container">
			<h3 class="agileits-title two">Pet Adoption. Be Part of <span> Something Beautiful!</span></h3>
			<a href="about.php" class="button button-isi"><span>Contact Us </span><i class="icon glyphicon glyphicon-arrow-right"></i></a>
		</div>
	</div>
	<!-- //w3-agilesale -->
	<!-- subscribe -->
	
	<!-- //subscribe -->
	<!-- copy rights start here -->
	<div class="copy-w3right">
		<div class="container">
			<div class="top-nav bottom-w3lnav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="medicare.php">Medicare</a></li>
					<li><a href="catagories.php">Catagories</a></li>
					<li><a href="foods.php">Foods</a></li>
					<li><a href="accessories.php">Accessories</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
			<p>© 2018 Animal Care Zone : All Rights Reserved | Design by : Wall Breaker </p>
		</div>
	</div>
	<!-- text-effect -->
	<script type="text/javascript" src="js/jquery.transit.js"></script>
	<script type="text/javascript" src="js/jquery.textFx.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.w3ls_agile').textFx({
				type: 'fadeIn',
				iChar: 100,
				iAnim: 1000
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.w3_text').textFx({
				type: 'fadeIn',
				iChar: 100,
				iAnim: 1000
			});
		});
	</script>

	<!-- //copy right end here -->
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

	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- script for responsive tabs -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
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
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>