<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>V Assist | Service</title>
		
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
	
	</head>


	<body>
		
		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a id="branding" href="index.php">
						<img src="images/logo.png" alt="Company Logo" class="logo">
						<h1 class="site-title">V <span> Assist</span></h1>
					</a>

					<nav class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item current-menu-item"><a href="services.php">Services</a></li>
							 
							<li class="menu-item"><a href="requestservices.php">Request Service</a></li>
							<?php
							if($_SESSION['count']==True){ ?>
								<li class="menu-item"><a href="logout.php">Logout</a></li> 
							<?php } else{ ?>
							<li class="menu-item"><a href="login.php">Login</a></li> 
							<?php }?>
							
							<?php
							if($_SESSION['count1']==True){ ?>
							<li class="menu-item"><a href="logout.php">Logout</a></li> 
							<?php } else{ ?>
							<li class="menu-item"><a href="mlogin.php">Join as Mechanic</a></li>
							<?php }?>
						</ul>
					</nav>
					<nav class="mobile-navigation"></nav>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">We assist your vechile with in minuates</h2>

						<figure class="block">
							<img src="dummy/.jpg" alt="">
						</figure>
						<div class="feature-grid">
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-cpu.png" alt=""></figure>
								<h2 class="feature-title">CPU Diagnostics</h2>
								<p>We Diagnostics your vechile </p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-suspension.png" alt=""></figure>
								<h2 class="feature-title">Suspension</h2>
								<p>Check Suspension</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-engine.png" alt=""></figure>
								<h2 class="feature-title">Engine</h2>
								<p>24 x 7 good condition</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-brake.png" alt=""></figure>
								<h2 class="feature-title">Brakes</h2>
								<p>Check brakes</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-steering.png" alt=""></figure>
								<h2 class="feature-title">Steering</h2>
								<p>Handling perfect</p>
							</div>
							<div class="feature">
								<figure class="feature-image"><img src="images/icon-exhaust.png" alt=""></figure>
								<h2 class="feature-title">Exhaust System</h2>
								<p>No smoke</p>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			
			<main class="main-content">
				
				<div class="fullwidth-block content">
					<div class="container">
						<h2 class="entry-title">Any Problem?</h2>

						<div class="row">
							<div class="col-md-5">
								<form action="#" class="contact-form">
									<input type="text" id="name" placeholder="Name...">
									<input type="text" id="email" placeholder="Email...">
									<textarea name="" id="message" placeholder="Message..."></textarea>
									<div class="text-right">
										<input type="submit" value="Send message">
									</div>
								</form>
							</div>
							<div class="col-md-6 col-md-offset-1">
								<div class="map-container">
									<div class="map"></div>
									<address>
										<strong>V Assist INC.</strong>
										<a href="mailto:office@companyname.com">office@vassist.com</a> <br>
										<span>Nampally , Hyderabad</span>
										<a href="tel:7660092071">7660092071</a>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->
			<footer class="site-footer">
				<div class="container">
					<div class="subscribe-form">
						<form action="#">
							<input type="text" placeholder="Enter your email to subscribe...">
							<button type="submit"><img src="images/icon-envelope-white.png" alt=""></button>
						</form>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="copy">
						<p>Copyright 2020. All rights reserved.</p>
					</div>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>