<html lang="en">
	
	
<head>
	<?php
		include 'head.php';
		generateHead("js/survey.js");
	?>
	<script src="js/survey.js"></script>
</head>
<body>
<?php
    include 'navbar.php';
    headerFunction("navbar-dark bg-dark", "", __FILE__); //for everything else
?>

	<!-- Surveys Contents Start-->
	<div class="container-fluid text-center">
		<div class="row row-eq-height" style="padding-top: 70px">
			<div class="col-sm-2 sidenavl">
				<h3>Survey</h3>
				<p style="color:rgba(255, 255, 255, 0.4); text-align:left; font-style:italic">Surveys help you connect at multiple touchpoints to find out exactly what your customers want, need, and expect.</p>
			</div>
			<div class="col-sm-1 sidebg"></div>
			<div class="col-sm-8 text-left">
				<p style="width:80%">Snackfacts would like to thank you in advance for your participation in the survey, the data you provide will 
				be used to generate analyzed date on this webpage. In doing so we hope that this data can help inform companies about what consumers like you,
				want in the vending machines around your campus.</p>
				<!--Question 1 START-->
				<form id="question1" name="question1">
					<h6>1) Do you purchase snacks on campus currently?</h6>
					<label class="radio-inline"><input id="yes1" name="opt" onclick="expandCollapseBox('question1.2', 'question1.1');" type="radio">Yes</label> 
					<label class="radio-inline"><input id="no1" name="opt" onclick="expandCollapseBox('question1.1', 'question1.2');" type="radio">No</label>
				</form>
				<form id="question1.1" name="question1.1" style="display: none">
					<h6>Why not?</h6>
					<textarea id="question1.1.1" cols="75" name="Why" rows="5"></textarea><br>
				</form>
				<form id="question1.2" name="question1.2" style="display: none">
					<h6>How often?</h6>
					<ul style="list-style:none;">
						<li><input id="question1.2.1" name="question1.2" type="radio">Once a week</li>
						<li><input id="question1.2.2" name="question1.2" type="radio">One to two times a week</li>
						<li><input id="question1.2.3" name="question1.2" type="radio">Three to four times a week</li>
						<li><input id="question1.2.4" name="question1.2" type="radio">Five to six times a week</li>
						<li><input id="question1.2.5" name="question1.2" type="radio">Seven or more times a week</li>
					</ul>
				</form>
				<!--Question 1 END-->
				<!--Question 2 START-->
				<form id="question2" name="question2">
					<h6>2) Do you purchase beverages on campus currently?</h6>
					<label class="radio-inline"><input id="yes2" name="opt" onclick="expandCollapseBox('question2.2', 'question2.1');" type="radio">Yes</label> 
					<label class="radio-inline"><input id="no2" name="opt" onclick="expandCollapseBox('question2.1', 'question2.2');" type="radio">No</label>
				</form>
				<form id="question2.1" name="question2.1" style="display: none">
					<h6>Why not?</h6>
					<textarea id="2.1.1" cols="75" name="why" rows="5"></textarea><br>
				</form>
				<form id="question2.2" name="question2.2" style="display: none">
					<h6>How often?</h6>
					<ul style="list-style:none;">
						<li><input id="question2.2.1" name="question2.2" type="radio">Once a week</li>
						<li><input id="question2.2.2" name="question2.2" type="radio">One to two times a week</li>
						<li><input id="question2.2.3" name="question2.2" type="radio">Three to four times a week</li>
						<li><input id="question2.2.4" name="question2.2" type="radio">Five to six times a week</li>
						<li><input id="question2.2.5" name="question2.2" type="radio">Seven or more times a week</li>
					</ul>
				</form>
				<!-- Question 2 END-->
				<!-- Question 3 START-->
				<form id="question3" name="question3">
					<h6>3) What sex are you?</h6>
					<label class="radio-inline"><input id="q3.1" name="opt" type="radio">Male</label>
					<label class="radio-inline"><input id="q3.2" name="opt" type="radio">Female</label>
					<label class="radio-inline"><input id="q3.3" name="opt" type="radio">Other</label><br>
				</form>
				<!-- Question 3 END-->
				<!-- Question 4 START-->
				<form id="question4" name="question4">
					<h6>4) What products do you most commonly purchase from vending machines on campus?</h6>
					<ul style="list-style:none;">
						<li><input id="soda/pop" name="soda/pop" type="checkbox" value="sode/pop">Soda/Pop</li>
						<li><input id="water" name="water" type="checkbox" value="water">Water</li>
						<li><input id="coffee" name="coffee" type="checkbox" value="coffee">Coffee</li>
						<li><input id="energy" name="energy" type="checkbox" value="energy">Energy Drink</li>
						<li><input id="chips" name="chips" type="checkbox" value="chips">Chips</li>
						<li><input id="candy" name="candy" type="checkbox" value="candy">Candy</li>
						<li><input id="pretzels" name="pretzels" type="checkbox" value="pretzels">Pretzels</li>
						<li><input id="gum" name="gum" type="checkbox" value="gum">Gum</li>
						<li><input id="nothing" name="nothing" type="checkbox" value="nothing">Nothing</li>
						<li><input id="other" name="other" onclick="expandCollapseBoxB('question4.1');" type="checkbox">Other Snack or Beverage</li>
					</ul>
				</form>
				<form id="question4.1" name="question4.1" style="display: none">
					<h6>Please specify:</h6>
					<textarea cols="75" name="Why" rows="5"></textarea><br>
				</form>
				<!-- Question 4 END-->
				<!-- Question 5 START-->
				<form id="question5" name="question5">
					<h6>5) How much are you wiling to spend on a snack from the vending machine?</h6>
					<ul style="list-style:none;">
						<li><input id="op5.1" name="opt" type="radio">$0.75</label></li>
						<li><input id="op5.2" name="opt" type="radio">$1.00</label></li>
						<li><input id="op5.3" name="opt" type="radio">$1.25</label></li>
						<li><input id="op5.4" name="opt" type="radio">$1.50</label></li>
					</ul>
				</form>
				<!-- Question 5 END-->
				<!-- Question 6 START-->
				<form id="question6" name="question5">
					<h6>6) When purchasing a snack or beverage, what most influences your purchase?</h6>
					<ul style="list-style:none;">
						<li><input id="question6.1" name="question6.1" type="radio">Interest in a new snack or beverage</li>
						<li><input id="question6.2" name="question6.2" type="radio">Snack or beverage taste</li>
						<li><input id="question6.3" name="question6.3" type="radio">Snack or beverage price</li>
						<li><input id="question6.4" name="question6.4" type="radio">How healthy a snack or beverage is</li>
						<li><input id="question6.5" name="question6.5" type="radio">How hungry you might be at a given time</li>
					</ul>
				</form>
				<!-- Question 6 END-->
				<!--Name and Email Gather START-->
				<p style="width:80%">To complete this survey we ask that you provide your name and email. The purpose of these provisions is to create 
				a PDF version that can be sent to your email. The email will not be used to send advertisements or spam. Thanks for your cooperation!</p><br>
				<form action="" id="survey" method="get" name="survey" onsubmit="return validate();">
					<label style="width:6%">Name:</label><input id="name" name="name" type="text"><br>
					<label style="width:6%">Email:</label><input id="email" name="email" type="text"><br>
					I agree to Snackfacts' terms and conditions: <input id="agreement" name="agreement" onclick="disable();" type="checkbox"><br><br>
					<input disabled id="submit" type="submit" value="Submit"><br><br>
				</form>
				<!--Name and Email Gather END-->
			</div>
		</div>
	</div>
	<?php include "footer.php" ?>
</body>
</html>