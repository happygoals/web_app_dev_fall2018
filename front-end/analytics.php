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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script><!-- Popper JS -->
	<script src="js/modal.js"></script>
	<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
	<script src="Chart.js/Chart.min.js"></script>
	
	<style>
		.chartBox {
			max-width: 400px;
			max-height: 400px;
		}

		.inv {
			display: none;
		}
	</style>
</head>
<body>
<?php
    include 'header.php';
    //headerFunction("navbar-light", "background-color: rgba(251, 237, 254, 0.8)", "success", __FILE__); //for home page
    headerFunction("navbar-dark bg-dark", "", "warning", __FILE__); //for everything else
?>
	<div class="container-fluid text-center">
		<div class="row row-eq-height" style="padding-top: 70px">
			<div class="col-sm-2 sidenavl">
				<h3>Analytics</h3>
				<p style="color:rgba(255, 255, 255, 0.4); text-align:left; font-style:italic">Keep a competitive vending machine by truly understanding the voice of your customers.</p><select class="form-control" id="option">
					<option value="bar">
						Bar chart
					</option>
					<option value="pie">
						Pie chart
					</option>
					<option value="line">
						Line chart
					</option>
					<option value="polar">
						Polar area chart
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
				<div class="row justify-content-around">
					<span class="p-2 flex-fill" style="background-color:Orange; color:white; margin: 4px; 2px;">
						<img alt="img1test" class="img-valign" src="resource/qmark.png" style="width:50px; height:50px"> Total Surveys:257</span> 
					<span class="p-2 flex-fill" style="background-color:SkyBlue; color:white; margin: 4px; 2px;">
						<img alt="img2test" class="img-valign" src="resource/user.png" style="width:50px; height:50px;" > New Visitors: 19</span> 
					<span class="p-2 flex-fill" style="background-color:YellowGreen; color:white; margin: 4px; 1px;">
						<img alt="img3test" class="img-valign" src="resource/snack.png" style="width:50px; height:50px">Popular Snack</span> 
						<span class="p-2 flex-fill" style="background-color:OrangeRed; color:white; margin: 4px; 2px;">
						<img alt="img2test" class="img-valign" src="resource/hot.png" style="width:50px; height:50px">Today's Hot Item </span>
				</div>
				
				<div class="vis" id="bar"> 
		<!--vis does nothing here, just differentiates it from invisible for code readability -->
					<div class="row justify-content-around">
						<div class="chartBox">
							<canvas height="400" id="barGraph1" width="400"></canvas>
						</div>
		<!--unfortunately, i think we have to duplicate this for each chart...-->
			<div class="col-sm-4">
				<div class="rightbox" style="background: #009588; color: white;  margin-left: 2px; margin-top: 7px; min-height: 210px; text-align: left; padding: 5px;  border-radius: 25px;">
					<h5 style="text-align:center;">Top Sale List</h5>
					
							<ol>
								<li>Coke</li>
								<li>Orange Juice</li>
								<li>Potato chips</li>
							</ol>
				</div>
				
				<div style="background: #01bcd4; color: white; min-height: 150px; text-align: left; padding: 5px; margin-top: 20px;  border-radius: 25px;">
					<h5 style="text-align:center;">New Entry Lank</h5>
					<ul>
						<li>Cute Cookie</li>
						<li>Buritto</li>
						<li>Banana</li>
					</ul>
				</div>
			</div>
				</div>
					<script src="js/barGraph.js"></script>
				</div>
				<div class="inv" id="pie">
					<div class="chartBox">
						<canvas height="400" id="pieChart1" width="400"></canvas>
					</div>
					<script src="js/pieChart.js"></script>
					
				</div>
				
				<div class="inv" id="line">
					<div class="chartBox">
						<canvas height="400" id="lineChart1" width="400"></canvas>
					</div>
					
					<div class="chartBox">
						<canvas height="400" id="lineChart2" width="400"></canvas>
					</div>
					
					<script src="js/lineGraph.js"></script>
				</div>
				<div class="inv" id="polar">
					<h2>Polar charts are disabled, severely broken</h2>
					<div class="chartBox">
						<canvas height="400" id="polarChart1" width="400"></canvas>
					</div>
					<!--<script src="js/polarChart.js"></script>-->
				</div>
				<div class="inv" id="scatter">
					<div class="chartBox">
						<canvas height="400" id="scatterPlot1" width="400"></canvas>
					</div>
					
					<script src="js/scatterPlot.js"></script>
				</div>
				<div>
					<table class="table" style="-ms-overflow-style: -ms-autohiding-scrollbar; max-height: 200px;">
					
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Product Name</th>
								<th scope="col">Location</th>
								<th scope="col">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Kitkat</td>
								<td>Vending machine 1</td>
								<td>1 $</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Starbucks coffee</td>
								<td>Vending machine 2</td>
								<td>2.5 $</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Cute cookie</td>
								<td>Vending machine 1</td>
								<td>2 $</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Sandwich</td>
								<td>Vending machine 3</td>
								<td>2.3 $</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>Pizza</td>
								<td>Vending machine 3</td>
								<td>3 $</td>
							</tr>
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