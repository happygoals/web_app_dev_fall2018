<?php
session_start();

require ('connection.php');

//determine if user has admin privs or not
$adminPriv = false;
if (isset($_SESSION["username"])) {
	//user is logged in, check if they're an admin
	$result = $connection->prepare("SELECT * FROM Person WHERE (user = ?) and (isAdmin = 1)");
	$result->execute(array($_SESSION["username"])) or die(mysqli_error());
	if ($result->rowCount() == 1) {
		//user is an admin
		$adminPriv = true;
	}
}

//get survey data for later use
$stmt = $connection->prepare("SELECT COUNT(*) FROM survey1");
$stmt->execute() or die(mysqli_error());
$numSurveys = $stmt->fetch()[0];
/*
//get new visitors based on the date
$stmt2 = $connection->prepare("SELECT count(*) FROM `survey1` WHERE DATE(Date) BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()");
$stmt2->execute() or die(mysqli_error());
$numNewUsers = $stmt2->fetch()[0];
*/
//get most popular snack
$stmt = $connection->prepare("SELECT name FROM Product");
$stmt->execute() or die(mysqli_error());

$mostPopular = $stmt->fetch()[0];
$stmt3 = $connection->prepare("SELECT name FROM Product");
$stmt3->execute() or die(mysqli_error());
$mostPopular = $stmt3->fetch()[0];


//get Top Sale List
$stmt4 = $connection->prepare("SELECT question9 FROM survey1 LIMIT 3");
$stmt4->execute() or die(mysqli_error());

//that query returns several rows (up to 3), so we put each row into a new array
$i = 0;
while ($result = $stmt4->fetch()) {
	$TodaySale[$i] = $result[0];
	$i++;
}


?>

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
    include "common.php";
    headerFunction("navbar-dark bg-dark", "", __FILE__);
?>
	<div class="container-fluid text-center">
		<div class="row row-eq-height" style="padding-top: 70px">
			<div class="col-sm-2 sidenavl">
				<h3>Analytics</h3>
				<p style="color:rgba(255, 255, 255, 0.4); text-align:left; font-style:italic">Keep a competitive vending machine by truly understanding the voice of your customers.</p>
				<select class="form-control" id="option" >
					<option value="bar">
						Bar chart
					</option>
					<option value="pie">
						Pie chart
					</option>
					<option value="line">
						Line chart
					</option>
					<option value="radar">
						Radar chart
					</option>
					<option value="scatter">
						Scatter chart
					</option>
				</select> 
				<script>
					document.getElementById("option").addEventListener('change', function () {
						'use strict';
						var vis = document.querySelector('.vis'), target = document.getElementById(this.value);
						if (vis !== null) {
							vis.className = 'inv';
						}
						if (target !== null ) {
							target.className = 'vis';
						}
					});
				</script>
			</div>
			<div class="col-sm-8 text-left">
				<div class="row" style="margin: 5px auto;" >
					<?php
						simpleBox("Orange", "far fa-clipboard", "Total Surveys", "$numSurveys");
						simpleBox("Salmon", "far fa-user", "New Visitors", "$numNewUsers");
						simpleBox("YellowGreen", "fas fa-cookie-bite", "Popular Snack", "$mostPopular");
						simpleBox("OrangeRed", "fab fa-hotjar", "Today's Hot Item", "Coke");
					?>
				</div>
				<!-- Bar -->
				<div class="vis" id="bar" style="margin: 0px auto;"> 
					<div class="chartBox">
						<canvas width="300px" height="300px" id="barGraph1"></canvas>
					</div>
					<script src="js/barGraph.js"></script>
				</div>
				<!-- Pie -->			
				<div class="inv" id="pie" style="margin: 0px auto;">
					<div class="chartBox">
						<canvas width="300px" height="300px" id="pieChart1"></canvas>
					</div>
					<script src="js/pieChart.js"></script>
				</div>
				<!-- Line -->				
				<div class="inv" id="line" style="margin: 0px auto;">
					<div class="chartBox">
						<canvas width="300px" height="300px" id="lineChart1" ></canvas>
					</div>
					<script src="js/lineGraph.js"></script>
				</div>
				<!-- Radar --> 
				<div class="inv" id="radar" style="margin: 0px auto;">
					<div class="chartBox">
						<canvas width="300px" height="300px" id="radarChart1"></canvas>
					</div>
					<script src="js/radarChart.js"></script>
				</div>
				<!-- Scatter-->
				<div class="inv" id="scatter" style="margin: 0px auto;">
					<div class="chartBox">
						<canvas width="300px" height="300px" id="scatterPlot1" ></canvas>
					</div>
					<script src="js/scatterPlot.js"></script>
				</div>
				<!--list boxes-->
				<div class="row">
					<?php
						olistbox("#17a2b8", "Top Sale List", array("Coke", "Orange Juice", "Potato Chips"));
						ulistbox("#6c757d", "New Entry Lank", array("Cute Cookie", "Buritto", "Banana"));
					?>
				</div>
				<!-- Table -->
				<div>
					<?php
					if ($adminPriv == true) {
						//add item button is only available to admins
						echo '<button type="button" class="btn btn-outline-primary" onclick="addRow()"><i class="fas fa-plus"></i>&nbsp;Add item</button>';
					}
					?>
					
					<table class="table" id="table" style="-ms-overflow-style: -ms-autohiding-scrollbar; max-height: 200px; margin: 10px auto;">
						<thead>
							<tr style="text-align:center;">
								<th scope="col">#</th>
								<th scope="col">Product Name</th>
								<th scope="col">Location</th>
								<th scope="col">Price</th>
								<?php
								if ($adminPriv == true) {
									//action column is only available to admins
									echo '<th scope="col">Action</th>';
								}
								?>
							</tr>
						</thead>
						<tbody>
					<?php
						//get product data from db
						$stmt = $connection->prepare("SELECT * FROM Product ORDER BY wouldPurchase DESC");
						$stmt->execute() or die(mysqli_error());
						
						//insert each into the table
						$i = 1;
						while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
							productRow($i, $result["name"], $result["machines"], $result["price"], $adminPriv);
							$i++;
						}
					?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-sm-2 sidenav">
			</div>
		</div>
	</div>
	<?php include "footer.php" ?>
</body>
</html>