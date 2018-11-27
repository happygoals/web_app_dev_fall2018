<?php
session_start();
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
    //determine if user has admin privs or not
    $adminPriv = false;
    if (isset($_SESSION["username"])) {
        //user is logged in, check if they're an admin
        require ('connection.php');
        $result = $connection->prepare("SELECT * FROM Person WHERE (user = ?) and (isAdmin = 1)");
        $result->execute(array($_SESSION["username"])) or die(mysqli_error());
        echo "failed";
        if ($result->rowCount() == 1) {
            //user is an admin
            $adminPriv = true;
        }
    }
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
				<div class="row">
					<?php
						simpleBox("Orange", "far fa-clipboard", "Total Surveys", "257");
						simpleBox("Salmon", "far fa-user", "New Visitors", "19");
						simpleBox("YellowGreen", "fas fa-cookie-bite", "Popular Snack", "KitKat");
						simpleBox("OrangeRed", "fab fa-hotjar", "Today's Hot Item", "Coke")
					?>
				</div>
				<!-- Bar -->
				<div class="vis" id="bar" style="margin: 0px 350px;"> 
					<div class="chartBox">
						<canvas width="300" height="400" id="barGraph1"></canvas>
					</div>
					<script src="js/barGraph.js"></script>
				</div>
				<!-- Pie -->			
				<div class="inv" id="pie" style="margin: 0px 350px;">
					<div class="chartBox">
						<canvas width="300" height="400" id="pieChart1"></canvas>
					</div>
					<script src="js/pieChart.js"></script>
				</div>
				<!-- Line -->				
				<div class="inv" id="line" style="margin: 0px 350px;">
					<div class="chartBox">
						<canvas width="300" height="400" id="lineChart1" ></canvas>
					</div>
					<script src="js/lineGraph.js"></script>
				</div>
				<!-- Radar --> 
				<div class="inv" id="radar" style="margin: 0px 350px;">
					<div class="chartBox">
						<canvas width="400" height="500" id="radarChart1"></canvas>
					</div>
					<script src="js/radarChart.js"></script>
				</div>
				<!-- Scatter-->
				<div class="inv" id="scatter" style="margin: 0px 350px;">
					<div class="chartBox">
						<canvas width="300" height="400" id="scatterPlot1" ></canvas>
					</div>
					<script src="js/scatterPlot.js"></script>
				</div>
				<!--list boxes-->
				<div class="row">
					<?php
						listbox("#17a2b8", "Top Sale List", array("Coke", "Orange Juice", "Potato Chips"));
						listbox("#6c757d", "New Entry Lank", array("Cute Cookie", "Buritto", "Banana"));
					?>
				</div>
				<!-- Table --> 	
				<div>
					<table class="table" id="table" style="-ms-overflow-style: -ms-autohiding-scrollbar; max-height: 200px;">
						<thead>
							<tr style="text-align:center;">
								<th scope="col">#</th>
								<th scope="col">Product Name</th>
								<th scope="col">Location</th>
								<th scope="col">Price</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
					<?php
						productRow(1, "Kitkat", 1, 1.00, $adminPriv);
						productRow(2, "Starbucks coffee", 2, 2.50, $adminPriv);
						productRow(3, "Cute cookie", 1, 2.00, $adminPriv);
						productRow(4, "Sandwich", 3, 2.30, $adminPriv);
						productRow(5, "Pizza", 3, 3.00, $adminPriv);
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