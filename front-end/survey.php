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
				<form action="survey_stack.php" id="survey" method="post" name="survey" onsubmit="return validate();">
				<p style="width:80%">Snackfacts would like to thank you in advance for your participation in the survey, the data you provide will 
				be used to generate analyzed date on this webpage. In doing so we hope that this data can help inform companies about what consumers like you,
				want in the vending machines around your campus.</p>
				<!-- Question 1 Start -->
				<div id="question1" name="question1">
					<h6>1) Which of the following would you consider yourself at your respective campus?</h6>
					<ul style="list-style:none;">
						<li><input id="op1.0.0" name="opt" type="radio" value="faculty">Faculty</li>
						<li><input id="op1.0.1" name="opt" type="radio" value="staff">Staff</li>
						<li><input id="op1.0.2" name="opt" type="radio" value="student">Student</li>
						<li><input id="op1.0.3" name="opt" type="radio" value="visitor">Visitor</li>
					</ul>
				</div>
				<!-- Question 1 End -->
				<!-- Question 2 START-->
				<div id="question2" name="question2">
					<h6>2) What sex are you?</h6>
					<label class="radio-inline"><input id="op2.0.0" name="opt2" type="radio" value="Male">Male</label>
					<label class="radio-inline"><input id="op2.0.1" name="opt2" type="radio" value="Female">Female</label>
					<label class="radio-inline"><input id="op2.0.2" name="opt2" type="radio" value="other">Other</label>
				</div>
				<!-- Question 2 END-->
		        <!-- Question 3 START-->
		    	<div id="question3" name="question3">
		    		<h6>3) Do you purchase snacks on campus currently?</h6>
		    		<label class="radio-inline"><input id="op3.0.0" name="opt3" onclick="expandCollapseBox('question3.2', 'question3.1');" value="yes" type="radio">Yes</label> 
		    		<label class="radio-inline"><input id="op3.0.1" name="opt3" onclick="expandCollapseBox('question3.1', 'question3.2');" value= "no" type="radio">No</label>
		    	</div>
		    	<div id="question3.1" name="question3.1" style="display: none">
		    		<h6>Why not?</h6>
		    		<textarea id="op3.1.0" cols="75" name="Why" rows="5" value=""></textarea><br>
		    	</div>
		    	<div id="question3.2" name="question3.2" style="display: none">
		    		<h6>How often?</h6>
		    		<ul style="list-style:none;">
		    			<li><input id="op3.2.0" name="op3.2.0" type="radio" value="Once a week">Once a week</li>
		    			<li><input id="op3.2.1" name="op3.2.0" type="radio" value="One to two times a week">One to two times a week</li>
		    			<li><input id="op3.2.2" name="op3.2.0" type="radio" value="Three to four times a week">Three to four times a week</li>
		    			<li><input id="op3.2.3" name="op3.2.0" type="radio" value="Five to six times a week">Five to six times a week</li>
		    			<li><input id="op3.2.4" name="op3.2.0" type="radio" value="Seven or more times a week">Seven or more times a week</li>
		    		</ul>
		    	</div>
		    	<!--Question 3 END-->
		    	<!--Question 4 START-->
				<div id="question4" name="question4">
					<h6>4) Do you purchase beverages on campus currently?</h6>
					<label class="radio-inline"><input id="op4.0.0" name="opt4" onclick="expandCollapseBox('question4.2', 'question4.1');" type="radio" value="yes">Yes</label> 
					<label class="radio-inline"><input id="op4.0.1" name="opt4" onclick="expandCollapseBox('question4.1', 'question4.2');" type="radio" value="no">No</label>
				</div>
				<div id="question4.1" name="question4.1" style="display: none">
					<h6>Why not?</h6>
					<textarea id="op4.1.0" cols="75" name="why2" rows="5" value=""></textarea><br>
				</div>
				<div id="question4.2" name="question4.2" style="display: none">
					<h6>How often?</h6>
					<ul style="list-style:none;">
						<li><input id="op4.2.0" name="op4.2.0" type="radio" value="Once a week">Once a week</li>
						<li><input id="op4.2.1" name="op4.2.0" type="radio" value="One to two times a week">One to two times a week</li>
						<li><input id="op4.2.2" name="op4.2.0" type="radio" value="Three to four times a week">Three to four times a week</li>
						<li><input id="op4.2.3" name="op4.2.0" type="radio" value="Five to six times a week">Five to six times a week</li>
						<li><input id="op4.2.4" name="op4.2.0" type="radio" value="Seven or more times a week">Seven or more times a week</li>
					</ul>
				</div>
				<!-- Question 4 END-->
				<!-- Question 5 Start -->
				<div id="question5" name="question5">
					<h6>5) What preffered payment methods would you like to use at a vending machine?</h6>
					<ul style="list-style:none;">
						<li><input id="op5.0.0" name="opt5" type="radio" value="credit">Credit</li>
						<li><input id="op5.0.1" name="opt5" type="radio" value="debit">Debit</li>
						<li><input id="op5.0.2" name="opt5" type="radio" value="cash">Cash</li>
						<li><input id="op5.0.3" name="opt5" type="radio" value="chip">Chip</li>
						<li><input id="op5.0.4" name="opt5" type="radio" value="other">Other Payment Type</li>
					</ul>
				</div>
				<!-- Question 5 End -->
				<!-- Question 6 START-->
				<div id="question6" name="question6">
					<h6>6) How much are you wiling to spend on a beverage or snack from the vending machine?</h6>
					<ul style="list-style:none;">
						<li><input id="op6.0.0" name="opt6" type="radio" value="0.75">$0.75</li>
						<li><input id="op6.0.1" name="opt6" type="radio" value="1.00">$1.00</li>
						<li><input id="op6.0.2" name="opt6" type="radio" value="1.50">$1.50</li>
						<li><input id="op6.0.3" name="opt6" type="radio" value="2.00">$2.00</li>
					</ul>
				</div>
				<!-- Question 6 END-->
				<!-- Question 7 START-->
				<div id="question7" name="question7">
					<h6>7) When purchasing a snack, what most influences your purchase?</h6>
					<ul style="list-style:none;">
						<li><input id="op7.0.0" name="opt7" type="radio" value="Interest in a new snack">Interest in a new snack</li>
						<li><input id="op7.0.1" name="opt7" type="radio" value="Snack taste">Snack taste</li>
						<li><input id="op7.0.2" name="opt7" type="radio" value="Snack price">Snack price</li>
						<li><input id="op7.0.3" name="opt7" type="radio" value="How healthy a snack is">How healthy a snack is</li>
						<li><input id="op7.0.4" name="opt7" type="radio" value="How hungry you might be at a given time">How hungry you might be at a given time</li>
					</ul>
				</div>
				<!-- Question 7 END-->
				<!-- Question 8 START-->
				<div id="question8" name="question8">
					<h6>8) When purchasing a beverage, what most influences your purchase?</h6>
					<ul style="list-style:none;">
						<li><input id="op8.0.0" name="opt8" type="radio" value="Interest in a new beverage">Interest in a new beverage</li>
						<li><input id="op8.0.1" name="opt8" type="radio" value="Beverage taste">Beverage taste</li>
						<li><input id="op8.0.2" name="opt8" type="radio" value="Beverage price">Beverage price</li>
						<li><input id="op8.0.3" name="opt8" type="radio" value="How healthy a beverag is">How healthy a beverage is</li>
						<li><input id="op8.0.4" name="opt8" type="radio" value="How thirsty you might be at a given time">How thirsty you might be at a given time</li>
					</ul>
				</div>
				<!-- Question 8 END-->
				<!-- Question 9 START-->
				<div id="question9" name="question9">
					<h6>9) What food product do you most commonly purchase from vending machines on campus?</h6>
					<ul style="list-style:none;">
						<li><input id="op9.0.0" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Energy Bar">Energy Bar</li>
						<li><input id="op9.0.1" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Chips">Chips</li>
						<li><input id="op9.0.2" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Candy">Candy</li>
						<li><input id="op9.0.3" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Cutecookie">Cute Cookie</li>
						<li><input id="op9.0.4" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Pretzels">Pretzels</li>
						<li><input id="op9.0.5" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Gum">Gum</li>
						<li><input id="op9.0.6" name="op9" onclick="collapseOnly('question9.1');" type="radio" value="Nothing">Nothing</li>
						<li><input id="op9.0.7" name="op9" onclick="expandOnly('question9.1');" type="radio" value="Other">Other Snack</li>
					</ul>
				</div>
				<div id="question9.1" name="question9.1" style="display: none">
					<h6>Please specify:</h6>
					<textarea id="9.1.0" cols="75" name="Why3" rows="5" value=""></textarea><br>
				</div>
				<!-- Question 9 END-->
				<!-- Question 10 START-->
				<div id="question10" name="question10">
					<h6>10) What beverage product do you most commonly purchase from vending machines on campus?</h6>
					<ul style="list-style:none;">
						<li><input id="op10.0.0" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="energydrink">Energy Drink</li>
						<li><input id="op10.0.1" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="coffee">Coffee</li>
						<li><input id="op10.0.2" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="pepsi">Pepsi</li>
						<li><input id="op10.0.3" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="mountaindew">Mountain Dew</li>
						<li><input id="op10.0.4" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="drpepper">Dr. Pepper</li>
						<li><input id="op10.0.5" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="water">Water</li>
						<li><input id="op10.0.6" name="op10" onclick="collapseOnly('question10.1');" type="radio" value="nothing">Nothing</li>
						<li><input id="op10.0.7" name="op10" onclick="expandCollapseBoxB('question10.1');" type="radio" value="">Other Beverage</li>
					</ul>
				</div>
				<div id="question10.1" name="question10.1" style="display: none">
					<h6>Please specify:</h6>
					<textarea id="10.1.0" cols="75" name="Why4" rows="5" value=""></textarea><br>
				</div>
				<!-- Question 10 END-->
				<!-- Question 11 START-->
				<div id="question11" name="question11">
					<h6>11) What food product do you most want removed from vending machines on campus?</h6>
					<ul style="list-style:none;">
						<li><input id="op11.0.0" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="energybar">Energy Bar</li>
						<li><input id="op11.0.1" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="chips">Chips</li>
						<li><input id="op11.0.2" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="candy">Candy</li>
						<li><input id="op11.0.3" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="cutecookie">Cute Cookie</li>
						<li><input id="op11.0.4" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="pretzels">Pretzels</li>
						<li><input id="op11.0.5" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="gum">Gum</li>
						<li><input id="op11.0.6" name="op11" onclick="collapseOnly('question11.1');" type="radio" value="nothing">Nothing</li>
						<li><input id="op11.0.7" name="op11" onclick="expandCollapseBoxB('question11.1');" type="radio" value="Other">Other Snack</li>
					</ul>
				</div>
				<div id="question11.1" name="question11.1" style="display: none">
					<h6>Please specify:</h6>
					<textarea id="11.1.0" cols="75" name="Why5" rows="5" value=""></textarea><br>
				</div>
				<!-- Question 11 END-->
				<!-- Question 12 START-->
				<div id="question12" name="question12">
					<h6>12) What beverage product do you most want removed from vending machines on campus?</h6>
					<ul style="list-style:none;">
						<li><input id="op12.0.0" name="op12" type="radio" value="energydrink">Energy Drink</li>
						<li><input id="op12.0.1" name="op12" type="radio" value="coffee">Coffee</li>
						<li><input id="op12.0.2" name="op12" type="radio" value="pepsi">Pepsi</li>
						<li><input id="op12.0.3" name="op12" type="radio" value="mountaindew">Mountain Dew</li>
						<li><input id="op12.0.4" name="op12" type="radio" value="drpepper">Dr. Pepper</li>
						<li><input id="op12.0.5" name="op12" type="radio" value="water">Water</li>
						<li><input id="op12.0.6" name="op12" type="radio" value="nothing">Nothing</li>
						<li><input id="op12.0.7" name="op12" onclick="expandCollapseBoxB('question12.1');" type="radio" value="Other">Other Beverage</li>
					</ul>
				</div>
				<div id="question12.1" name="question12.1" style="display: none">
					<h6>Please specify:</h6>
					<textarea id="12.1.0" cols="75" name="Why6" rows="5" value=""></textarea><br>
				</div>
				<!-- Question 12 END-->
				<!-- Question 13 Start -->
				<div id="question13" name="question13">
					<h6>13) Where would you like a Vending Machine placed on Campus given these choices?</h6>
					<select id="locations13" name="locatons13" onchange="updateCombo('locations13');">
						<option id="op13.0.0" value="">
							Choose Option
						</option>
						<option id="op13.0.1" value="Kettler Hall">
							Kettler Hall
						</option>
						<option id="op13.0.2" value="Neff Building">
							Neff Building
						</option>
						<option id="op13.0.3" value="ETCS Building">
							ETCS Building
						</option>
						<option id="op13.0.4" value="Science Building">
							Science Building
						</option>
						<option id="op13.0.5" value="Liberal Arts Building">
							Liberal Arts Building
						</option>
						<option id="op13.0.6" value="Library">
							Library
						</option>
						<option id="op13.0.7" value="Walb Union">
							Walb Union
						</option>
						<option id="op13.0.8" value="Visual Arts Building">
							Visual Arts Building
						</option>
						<option id="op13.0.9" value="Rhineheart Building">
							Rhineheart Building
						</option>
						<option id="op13.0.10" value="MCC Building">
							MCC Building
						</option>
						<option id="op13.0.11" value="MCB Building">
							MCB Building
						</option>
					</select>
				</div>
				<br>
				<div id="question13.1" name="question13.1" style="display: none">
					What type of vending machine?
					<br>
					<select id="vendtypes" name="vendtypes">
						<option id="op13.1.0" value="">
							Choose Option
						</option>
						<option id="op13.1.1" value="Snack Machine">
							Snack Machine
						</option>
						<option id="op13.1.2" value="Coffee Machine">
							Coffee Machine
						</option>
						<option id="op13.1.3" value="Beverage Machine">
							Beverage Machine
						</option>
						<option id="op13.1.4" value="Meal Machine">
							Meal Machine
						</option>
					</select>
				</div>
				<br><br>
				<!-- Question 13 End -->
				<!-- Question 14 Start -->
				<div id="question14" name="question14">
					<h6>14) Where would you like a vending machine removed from Campus given these choices?</h6>
					<select id="locations14" name="locatons14" onchange="updateCombo('locations14');">
						<option id="op14.0.0" value="">
							Choose Option
						</option>
						<option id="op14.0.1" value="Kettler Hall">
							Kettler Hall
						</option>
						<option id="op14.0.2" value="Neff Building">
							Neff Building
						</option>
						<option id="op14.0.3" value="ETCS Building">
							ETCS Building
						</option>
						<option id="op14.0.4" value="Science Building">
							Science Building
						</option>
						<option id="op14.0.5" value="Liberal Arts Building">
							Liberal Arts Building
						</option>
						<option id="op14.0.6" value="Library">
							Library
						</option>
						<option id="op14.0.7" value="Walb Union">
							Walb Union
						</option>
						<option id="op14.0.8" value="Visual Arts Building">
							Visual Arts Building
						</option>
						<option id="op14.0.9" value="Rhineheart Building">
							Rhineheart Building
						</option>
						<option id="op14.0.10" value="MCC Building">
							MCC Building
						</option>
						<option id="op14.0.11" value="MCB Building">
							MCB Building
						</option>
						<option id="op14.0.12" value="Don't Remove Vending Machines">
							MCB Building
						</option>
					</select>
				</div>
				<br>
				<div id="question14.1" name="question14.1" style="display: none">
					What type of vending machine?
					<br>
					<select id="vendtypes" name="vendtypes">
						<option id="op14.1.0" value="">
							Choose Option
						</option>
						<option id="op14.1.1" value="Snack Machine">
							Snack Machine
						</option>
						<option id="op14.1.2" value="Coffee Machine">
							Coffee Machine
						</option>
						<option id="op14.1.3" value="Beverage Machine">
							Beverage Machine
						</option>
						<option id="op14.1.4" value="Meal Machine">
							Meal Machine
						</option>
					</select>
				</div>
				<br><br>
				<!-- Question 14 End -->
				<!-- Question 15 Start -->
				<div id="question15" name="question15">
					<h6>15) Did you find that this survey was unbiased and gave you a chance to express your opinion fairly?</h6>
					<label class="radio-inline"><input id="op15.0.0" name="opt15" type="radio" onclick="collapseOnly('question15.1');" value="yes">Yes</label>
					<label class="radio-inline"><input id="q15.0.1" name="opt15" type="radio" onclick="expandOnly('question15.1');" value="no">No</label><br>
				</div>
				<div id="question15.1" name="question15.1" style="display: none">
					<h6>Why not?</h6>
					<textarea id="question15.1.0" cols="75" name="Why7" rows="5" value=""></textarea><br>
				</div>
				<!-- Question 15 End -->
				<!-- Question 16 Start -->
				<div id="question16" name="question16">
					<h6>16) Is there anything else that you might want to share with us here at Snackfacts?</h6>
					<textarea id="question16.0.0" cols="75" name="Why8" rows="5" value=""></textarea><br>
				</div>
				<!-- Question 16 End -->
				<!--Name and Email Gather START-->
				<p style="width:80%">To complete this survey we ask that you provide your name and email. The purpose of these provisions is to create 
				a PDF version that can be sent to your email. The email will not be used to send advertisements or spam. Thanks for your cooperation!</p><br>
				<div>
					<label style="width:6%">Name:</label><input id="name" name="name" type="text" value=""><br>
					<label style="width:6%">Email:</label><input id="email" name="email" type="text" value=""><br>
					<label>I agree to Snackfacts' terms and conditions: <input id="agreement" name="agreement" onclick="toggle();" type="checkbox"></label>
					<br><br>
					<input disabled id="submit" type="submit" value="Submit" name="submit"><br><br>
				</div>
				<!--Name and Email Gather END-->
			</div>
		</div>
	</div>
	<?php include "footer.php" ?>
</body>
</html>