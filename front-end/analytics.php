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
    headerFunction("navbar-dark bg-dark", "", __FILE__); //for everything else
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
				<div class="row justify-content-around">
					<div class="card text-white bg-warning mb-5" style="max-width: 18rem; margin:0px 0px 0px 25px;">
						<div class="card-header" style="background-color:Orange;"><h6>&nbsp;&nbsp;&nbsp;&nbsp;Total Surveys&nbsp;&nbsp;&nbsp; &nbsp;</h6></div>
							<div class="card-body" style="background-color:Orange;" >
						    	<h3 style="color:white;  text-align:center;"><i class="far fa-clipboard" style="color:white;"></i> 257</h3>
							</div>
						</div>
						<div class="card text-white bg-light mb-5" style="max-width: 18rem;  ">
							<div class="card-header" style="background-color:Salmon;" ><h6></i>&nbsp;&nbsp;&nbsp;&nbsp;New Visitors &nbsp;&nbsp;&nbsp;&nbsp;</h6></div>
								<div class="card-body" style="background-color:Salmon;" >
						  			<h3 style="color:white;  text-align:center;"><i class="far fa-user" style="color:white;"></i> 19</h3>
						  		</div>
							</div>
							<div class="card text-white bg-light mb-5" style="max-width: 20rem; ">
								<div class="card-header" style="background-color:YellowGreen;" >
									<h6>&nbsp;&nbsp;&nbsp;&nbsp;Popular Snack&nbsp;&nbsp;&nbsp;&nbsp;</h6>
						  		</div>
						  		<div class="card-body" style="background-color:YellowGreen;text-align:center;" >
							  		<h3 style="color:white;  text-align:center;"><i class="fas fa-cookie-bite" style="color:white;"></i> KitKat</h3>
								    <h4 class="card-title" style="background-color:YellowGreen; text-align:center; "></h4>
						  		</div>
							</div>
						<div class="card text-white bg-light mb-5 " style="max-width: 18rem; margin: 0px 25px 0px 0px;">
							<div class="card-header" style="background-color:OrangeRed;"><h6>&nbsp;Today's Hot Item&nbsp;</h6></div>
								<div class="card-body" style="background-color:OrangeRed;  text-align:center;">
									<h3 style="color:white;  text-align:center;"><i class="fab fa-hotjar" style="color:white;"></i> Coke</h3>
							  	</div>
							</div>
						</div>
						<!-- Bar -->
						<div class="vis" id="bar"> 
							<!--vis does nothing here, just differentiates it from invisible for code readability -->
							<div class="">
								<div class="chartBox">
									<canvas width="500" height="500" id="barGraph1"></canvas>
								</div>
							</div>
							<script src="js/barGraph.js"></script>
						</div>
						<!-- Pie -->			
						<div class="inv" id="pie">
							<div class="">
								<div class="chartBox">
									<canvas width="500" height="500" id="pieChart1"></canvas>
								</div>
							</div>
							<script src="js/pieChart.js"></script>
						</div>
						<!-- Line -->				
						<div class="inv" id="line">
							<div class="">
								<div class="chartBox">
									<canvas height="500" id="lineChart1" width="500"></canvas>
								</div>
							</div>
							<script src="js/lineGraph.js"></script>
						</div>
						<!-- Radar --> 
						<div class="inv" id="radar">
							<div class="">
								<div class="chartBox">
									<canvas height="500" id="radarChart1" width="500"></canvas>
								</div>
							</div>
							<script src="js/radarChart.js"></script>
						</div>
						<!-- Scatter-->
						<div class="inv" id="scatter">
							<div class="">
								<div class="chartBox">
									<canvas height="500" id="scatterPlot1" width="500"></canvas>
								</div>
							</div>
							<script src="js/scatterPlot.js"></script>
						</div>
						<!--list boxes-->
						<div class="row">
							<div class="card bg-info text-white text-center p-3" style="margin: 20px;">
			    				<blockquote class="blockquote mb-0">
			      					<h5 style="text-align:center;">Top Sale List</h5>
									<ol style="text-align:left;">
										<li>Coke</li>
										<li>Orange Juice</li>
										<li>Potato chips</li>
									</ol>
								</blockquote>
							</div>
							<div class="card bg-Secondary text-white text-center p-3" style="margin: 20px;">
			    				<blockquote class="blockquote mb-0">
									<h5 style="text-align:center;">New Entry Lank</h5>
									<ul style="text-align:left;">
										<li>Cute Cookie</li>
										<li>Buritto</li>
										<li>Banana</li>
									</ul>
							  	</blockquote>
							</div>
						</div>
						
						<div>
							<!-- Table --> 	
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
							<tr>
								<th scope="row">1</th>
								<td>Kitkat</td>
								<td>Vending machine 1</td>
								<td>$1.00</td>
								<td style="text-align:center;">
								<button type="button" class="btn btn-outline-primary" value='dddRow'><i class="fas fa-plus"></i>&nbsp;Add</button> 
								<button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button> 
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Starbucks coffee</td>
								<td>Vending machine 2</td>
								<td>$2.50</td>
								<td style="text-align:center;">
								<button type="button" class="btn btn-outline-primary"><i class="fas fa-plus"></i>&nbsp;Add</button> 
								<button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button> 
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Cute cookie</td>
								<td>Vending machine 1</td>
								<td>$2.00</td>
								<td style="text-align:center;">
								<button type="button" class="btn btn-outline-primary"><i class="fas fa-plus"></i>&nbsp;Add</button> 
								<button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button>  
								</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Sandwich</td>
								<td>Vending machine 3</td>
								<td>$2.30</td>
								<td style="text-align:center;">
								<button type="button" class="btn btn-outline-primary"><i class="fas fa-plus"></i>&nbsp;Add</button> 
								<button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button>  
								</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>Pizza</td>
								<td>Vending machine 3</td>
								<td>$3.00</td>
								<td style="text-align:center;">
								<button type="button" class="btn btn-outline-primary"><i class="fas fa-plus"></i>&nbsp;Add</button> 
								<button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i>&nbsp;Delete</button> 
								</td>
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