<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Snackfacts</title>
	<link href="favicon address" rel="shortcut icon">
	<link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"> 
	<link href="css/signin.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script><!-- Popper JS (what are we using this for?) -->
	<script src="js/modal.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script src="Chart.js/Chart.min.js"></script>
</head>
<body>
<?php
    include 'header.php';
    headerFunction("navbar-light", "background-color: rgba(251, 237, 254, 0.8)", "success", __FILE__); //for home page
    //headerFunction("navbar-dark bg-dark", "", "warning", __FILE__); //for everything else
?>
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<header id="header">
			<div class="logo">
				<span class="icon"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1 style="color:#FEB664">Vending machine</h1>
					<h1>+</h1>
					<h1 style="color:#EDC9FE">Data Analytics</h1><br>
					<p>Make the ideal vending machine you want <a href="survey.html">Surveys</a></p>
					<p>Maximize your profit from your vending machine <a href="analytics.html">Analytics</a></p>
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
					<h2>What we make</h2>
					<p>Snackfacts is a vending machine marketing analytics tool.</p>
				</div>
				<div class="col-sm-2 sidenavr right"></div>
			</div>
			<div class="row row-eq-height" style="padding-top: 70px">
				<div class="col-sm-2 sidenavr left"></div>
				<div class="col-sm-8 intro text-left">
					<h2>Who we are</h2>
					<p>Developed for Purdue University Fort Wayne CS372 Fall 2018 by Haemin Ryu, Mack Crawford, Michael Wolgast, Min Namgung, and Nicholas Barnard</p>
				</div>
				<div class="col-sm-2 sidenavr righttext">
					<h3>Member</h3>
				</div>
			</div>
		</div>
		<?php include "footer.php" ?>
	</div>
</body>
</html>