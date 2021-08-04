<?php
session_start();
$_SESSION['count']=False;
$_SESSION['count1']=False;
$_SESSION['c']=False;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>V Assist</title>
		<link href="http://fonts.googleapis.com/css?family=Titillium+Web:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="style.css">

	</head>


	<body class="header-collapse">
		
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
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="services.php">Services</a></li>
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
				<div class="hero hero-slider">
					<ul class="slides">
						<li data-bg-image="https://images.squarespace-cdn.com/content/v1/5626834fe4b0b3315b64b2c0/1453170056196-UJH5DW9Z077DREYUIGS0/ke17ZwdGBToddI8pDm48kOouuPCRmzCdud9lOgByk8N7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0hHMyhIh2kKzuOL3ydJCryACqlPbMiCiqRl7BxVOzFKv0F_GypTTLNm4da0xhhGDGA/kevinwaltonfamilyautoservice.jpg" style="background-repeat: no-repeat;  background-position: center;  background-size: 1550px 790px;">
							<div class="container">
								<h2 class="slide-title">What we provide</h2>
								<p class="slide-desc">On Road Safety of a vehicle is assured in our website<br> Just a phone call we catch you there.</p>
								<a href="#" class="button">Read more</a>
							</div>
						</li>
						<li data-bg-image="https://spcdn.aplusautoglass.com/wp-content/uploads/2019/04/black-and-white-car-classic-474.jpg" style="background-repeat: no-repeat;  background-position: center;  background-size: 1550px 790px;">
							<div class="container">>
							<div class="container">
								<h2 class="slide-title"></h2>
								<p class="slide-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, <br> totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
								<a href="#" class="button">Read more</a>
							</div>
						</li>
						<li data-bg-image="https://onebigphoto.com/uploads/2011/10/black-and-white-auto-repair.jpg" style="background-repeat: no-repeat;  background-position: center;  background-size: 1550px 790px;"	>
							<div class="container">
								<h2 class="slide-title">Place third slide header here</h2>
								<p class="slide-desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, <br> totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
								<a href="#" class="button">Read more</a>
							</div>
						</li>
					</ul>
				</div> <!-- .hero-slider -->

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Welcome to our Website</h2>
						<h1 class="section-desc">Our Services.</h1>

						<div class="row">
							
							<div class="counter">
								<img src="images/icon-car.png" class="counter-icon">
								<h3 class="counter-num">150</h3>
								<small class="counter-label">Car repaired</small>
							</div>
							
							
							<div class="counter">
								<img src="images/icon-wrench.png" class="counter-icon">
								<h3 class="counter-num">50</h3>
								<small class="counter-label">Diagnoses</small>
							</div>
							
							
							<div class="counter">
								<img src="images/icon-gears.png" class="counter-icon">
								<h3 class="counter-num">60</h3>
								<small class="counter-label">Gears changed</small>
							</div>
							
							
							<div class="counter last">
								<img src="images/icon-oil.png" class="counter-icon">
								<h3 class="counter-num">100</h3>
								<small class="counter-label">Oil litres used</small>
							</div>
							
						</div>
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				
						

				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Why choose us?</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="feature">
									<div class="feature-icon">
										<img src="images/icon-wheel-white.png">
									</div>
									<h3 class="feature-title">Call us we reach you </h3>
									<p>Iste natus error sit voluptatem accusantium laudantium totam rem aperiam eaque ipsa quae dolor inventore dolor sit.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<div class="feature-icon">
										<img src="images/icon-wrench-white.png">
									</div>
									<h3 class="feature-title">Can catch our autogears near by</h3>
									<p>Iste natus error sit voluptatem accusantium laudantium totam rem aperiam eaque ipsa quae dolor inventore dolor sit.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<div class="feature-icon">
										<img src="images/icon-key-white.png">
									</div>
									<h3 class="feature-title">Notify us through a email or phone</h3>
									<p>Iste natus error sit voluptatem accusantium laudantium totam rem aperiam eaque ipsa quae dolor inventore dolor sit.</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				
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
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
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