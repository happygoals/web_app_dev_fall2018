<html lang="en">
<head>
	<?php
		include 'head.php';
		generateHead();
	?>
</head>
<body>
<?php
    include 'navbar.php';
    headerFunction("navbar-light", "background-color: rgba(251, 237, 254, 0.8)", __FILE__); //for home page
?>
	<div id="wrapper">
		<br><br><br>
		<header id="header">
			<div class="logo">
				<span class="icon"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1 style="color:#FEB664">Vending machine</h1>
					<h1>+</h1>
					<h1 style="color:#EDC9FE">Data Analytics</h1><br>
					<p>Make the ideal vending machine you want <a href="survey.php">Surveys</a></p>
					<p>Maximize your profit from your vending machine <a href="analytics.php">Analytics</a></p>
				</div>
			</div>
		</header>
		<div class="container-fluid text-center">
			<!-- 3 row layout -->
			<div class="row row-eq-height" style="padding-top: 70px">
				<div class="col-sm-2 sidenavr">
					<h3>About</h3>
				</div>
				<div class="col-sm-8 text-left">
					<h2>What is snackfacts?</h2>
					<p>Snackfacts is a vending machine marketing analytics tool. A user can input data into surveys, which are the saved into our database.
					The data we collect is then presented in an comprehensive analysis screen. Users can create accounts to save data they enter, and then the administrators can have special admin accounts.
					Many types of vending machines are supported, along with various types of snacks and drinks.</p>
				</div>
				<div class="col-sm-2 sidenavr right"></div>
			</div>
			<div class="row row-eq-height" style="padding-top: 70px;">
				<div class="col-sm-2 sidenavr left"></div>
				<div class="col-sm-8 intro text-left">
					<h2>Who developed Snackfacts?</h2>
					<p>Developed for Purdue University Fort Wayne CS372 Fall 2018 by Haemin Ryu, Mack Crawford, Michael Wolgast, Min Namgung, and Nicholas Barnard</p>
				</div>
				<div class="col-sm-2 sidenavr righttext">
					<h3>Member</h3>
				</div>
			</div>
		</div>
	</div>
	<?php include "footer.php" ?>
</body>
</html>