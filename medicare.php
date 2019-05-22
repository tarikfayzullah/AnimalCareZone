
<?php
session_start();
if($_SESSION['name']!="admin"){
	header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Medicare</title>
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
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="agileits-banner about-w3banner">
		<div class="bnr-agileinfo">
			<div class="banner-top w3layouts">
				<div class="container">
					<ul class="agile_top_section">
						<li>
							
						</li>
						<li>
							<p><span class="glyphicon glyphicon-earphone"></span> +88 01681 186911 </p>
						</li>
						<li><a class="sign" href="View/logout.php">Sign Out</a></li>
					</ul>
				</div>
			</div>
			<div class="banner-w3text w3layouts">
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
								<li><a href="index.php" >Home</a></li>
								<li><a href="medicare.php" class="active">Medicare</a></li>
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
							<a href="https://twitter.com/InfoanimalInfo" class="social-button twitter" class="social-button twitter"><i class="fa fa-twitter"></i></a>
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
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
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
						<h3 class="agileinfo_sign">Sign Up</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="text" name="name" placeholder="Username" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" class="password" name="Password" id="password1" placeholder="Password" required="" />
								<input type="password" class="password" name="Confirm Password" id="password2" placeholder="Confirm Password" required=""
								/>
								<input type="submit" value="Sign Up">
							</form>
						</div>
						<p><a href="#"> By clicking register, I agree to your terms</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->


	<!-- /services -->
	<div class="agile_secives " id="services">
		<div class="container">
			<h3 class="agileits-title two">What we Do</h3>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-eye" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Dog Walking</h5>
							<p> Give traingin how to dog waking ...</p>
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
							<h5>Pet Grooming</h5>
							<p>Feeding, Breading etc...</p>
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
							<h5>Pet Sitting</h5>
							<p>Training how to seatting and so on...</p>
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
							<h5>Pet Daycare</h5>
							<p>Take care of your pets. Emergency services!...</p>
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
							<h5>Veterinary Help</h5>
							<p>All kind of veterinary are avialable!...</p>
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
							<p>Everyday at 9.00AM to 5.00 PM... </p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	


<!-- //Vet -->
<div class="container">

		<h1 class="jumbotron text-center" style="color: red;"> Vet Name & Address!</h1>
 		
 		<h2 align="center" style="color: green; padding-bottom: 20px;"> Vets in Dhaka </h2>
 	<div class="row" style="padding-bottom: 20px;">
  
    	<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr.Siamak</h3>
      				<p>**He attends house calls.<br>
						Phone # 8917249;<br>
						Cell # 01711561155<br>
						Residence come chamber : H- 56, R- 9/B, Sector : 5, Uttara.<br>
						.<br>
						.<br>
						.<br>
						.<br>
						.<br>
						.<br>
					</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr. Motahar Hossain </h3>
      				<p>  **He attends house calls.<br>
						Enlisted vet of USA embassy<br>
						Cell # 01711541070 <br>
						Gulshan 2 Dcc Market, 2nd floor.<br>
						Visitng House : 10/11 to 2pm (call the vet before going)
						.<br>
						.<br>
						.<br>
						.<br>
						.<br>
						.<br>
					</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr. K. B. M. Saiful Islam</h3>
      				<p>** Home calls (on request)<br>
							Vet & Pet Care<br>
							https://www.facebook.com/vetnpet.care<br> 
							Hotline: 01674-173-844;<br>
							01711-120-108<br>
							Sher-e-Bangla Agricultural University<br>
							Sheikh Kamal Onushod Bhobon<br>
							**Visiting hour: 5.30 Pm to 9 Pm<br>
							** Tele/Online Consultation (free).<br>
						.<br>
					</p>
      			</div>
		</div>
	</div>

	<div class="row" style="padding-bottom: 20px;">
  
    	<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr. Md. Luthfor Rahman</h3>
      				<p>**He attends house Calls.<br>
						Cell # 01552457085, 01731492093<br>
						Central Veterinary Hospital<br>
						48,Kazi Alauddin Road, Dhaka-1000<br>
						Email: luthfor75@gmail.com<br>
						Residene: Nikunja-2, Khilkhet, Dhaka..<br>
						.<br>
						.<br>
						.<br>
					</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr.Azmat Ali</h3>
      				<p>**He attends House calls<br>
						Phone: 9883486, 01912-013615, 01715-078434<br>
						Address: Gulshan Pet-Animal Clinic<br>
						(A-Z Pet Animal Solution in Dhaka)<br>
						4-5 DCC Super Market<br>
						Gulshan-2, Dhaka-1212<br>
						Visiting Hours: Call the vet before going.<br>
						.<br>
						.<br>
					</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr.Md.Shahidul Islam</h3>
      				<p>Cell#01711364651<br>
						Central Veterinary Hospital<br>
						48,Kazi Alauddin Road, Dhaka-1000<br>
						Another chamber : Gulshan 2 DCC market.<br>
						.<br>
						.<br>
						.<br>
						.<br>
						.<br>
					</p>
      			</div>
		</div>
	</div>

	<div class="row" style="padding-bottom: 20px;">
  
    	<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr.Kazi Mujibur Rahman</h3>
      				<p>Ex-Chief vet of Central Veterinary Hospital,Dhaka<br>
					Cell #01715016218</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr. Abdullah-Al-Mujahid</h3>
      				<p> 01715728760.<br>
      					.<br>
      					.<br>
      				</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3> Dr.Mohammad Shariful Haque</h3>
      				<p> Phone # 8619706; Cell # 0173046585<br>
						ElephantRoad. .<br>
						.<br>
					</p>
      			</div>
		</div>
	</div>

	<div class="row" style="padding-bottom: 20px;">
  
    	<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr. Lf. Col Shahjada </h3>   
      				   	<p>Cell # 01711123288 Bangladesh Army (vet)</p>
      			</div>
		</div>

		<div class="col-sm-4"> 
      			<div align="center" style="border: 1px solid red;" >       			
      				<h3>Dr. Aravinda</h3>
      				<p> Cell # 01936617437
      					.<br>
      					.<br>
      				</p>
      			</div>
		</div>

	</div>

	

	<h2 align="center" style="color: green; padding-bottom: 20px; padding-top: 50px;"> Vets in Chittagong </h2>

	
	<div class="row" style="padding-bottom: 20px;">

		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Chittagaong Vetenary and Animal Science University</h3>
				<p>zakir hossain road, khulshi. ctg-4202</p>
			</div>
		</div>
			
		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Dr. Bibek Chandra</h3>
				<p>Cell # 01711057533 sutradhar
					.<br>
					.<br>
					.<br>
				</p>
			</div>
		</div>	

		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">
				<h3>Dr.Monowar sayeed</h3>
				<p>Cell # 01736930901 pallab.<br>
					.<br>
					.<br>

				</p>
			</div>	
		</div>
		
	</div>


	<div class="row" style="padding-bottom: 20px;">

		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Dr. Morshed</h3>
				<p>Cell # 01192046813</p>
			</div>
		</div>
			
		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Dr. Farhad</h3>
				<p>Cell # 01711172139</p>
			</div>
		</div>	
		
	</div>


	<h2 align="center" style="color: green; padding-bottom: 20px; padding-top: 50px;"> Vets in Sylhet </h2>

	<div class="row" style="padding-bottom: 20px;">

		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Dr. A T M Mahbub E Elahi</h3>
				<p>Professor, Dept of Microbiology, SAU<br>
					Cell # 01711301042<br>
					Email: atm.mahbub.elahi@gmail.com</p>
			</div>
		</div>
			
		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Dr. Syed Sayem Uddin Ahmed</h3>
				<p>Dept of Public Health<br>
					Cell # 01947706956<br>
					Email: sayeem_2000@yahoo.com</p>
			</div>
		</div>	

		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">
				<h3>DR. Animesh Roy</h3>
				<p>VS, SAU Vet Clinics<br>
					Cell # 01717896167<br>
					Email: royanimeshvet@yahoo.com.<br>
					.<br>
				</p>
			</div>	
		</div>
		
	</div>

	<div class="row" style="padding-bottom: 20px;">

		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>DR. Mahbub</h3>
				<p>VS, District Vet. Hospital, Sylhet<br>
					Cell # 01711287533
					.<br>
					.<br>
				</p>
			</div>
		</div>
			
		<div class="col-sm-4">
			<div align="center" style="border: 1px solid blue;">	
				<h3>Dr. Rofiqul Islam</h3>
				<p>Dept of Medicine,SAU <br>
					Cell # 01199008496 
					Email : dr.rafiqsau@yahoo.com</p>
			</div>
		</div>	
		
	</div>




</div>



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