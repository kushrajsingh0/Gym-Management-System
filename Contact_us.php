<?php 
include ("includes/db.php");
include ("functions/functions.php");

?>

<html>
<head>
	<title>MyGym | Contact Us</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>

<body>

<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="header_wrapper">
			<a href="index.php"><img src="images/logo.jpg"></a>
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
		<div id="navbar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="my_account.php">My Account</a></li>
				<li><a href="Contact_us.php">Contact Us</a></li>
			</ul>

			<div id="login-btn-signup">
					<li><a href="logout.php">Logout</a></li>
			</div>
		</div>
		<!-- NavBar End -->
		
		<!-- Content Start -->
		<div class="content_wrapper">
			<div id="left_sidebar">
				<div id="sidebar_title">Days</div>
				<ul id="days">
					<?php  
					 getDays();	
					?>
				</ul>

				<div id="sidebar_title">Exercises</div>
				<ul id="days">
					<?php 
						getExercise();
					?>
				</ul>
		</div>
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: RED; text-align:center;"><center>:ABOUT US:</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-image: url(images/bg4.png)">
						<P align="center"> Building no1, Lane 4, Sector 6, New Delhi, 110049 <br>
		                   		Manish Kumar : 9834553712<br>
		                   		Kush Raj Singh : 8970551466<br>
						Email us at : MyGym@gmail.com<br>
						
						  
						  
		</P>
						
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
			
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:#000; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif">&copy; 2021 All rights reserved | Developed By: MANISH KUMAR & KUSH RAJ SINGH </a></h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->

</body>
</html>