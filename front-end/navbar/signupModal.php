<?php
	//enable sessions
    session_start();

    require ('connection.php');
    
    //check if all fields were submitted and if the signup was previously deemed valid
    if (isset($_POST['signupFirstName']) && isset($_POST['signupLastName']) && isset($_POST['signupEmail']) && isset($_POST['signupUsername']) && isset($_POST['signupPass'])) {
    	//make sure there isn't an account already registered with this username or email
		$result = $connection->prepare("SELECT * FROM Person WHERE (user= ? OR email = ?)");
		$result->execute(array($_POST["signupUsername"], $_POST["signupEmail"])) or die(mysqli_error());        

		//check whether we found a row
		if ($result->rowCount() == 1) {
			$signupError = true;
		}
		else if (filter_var($_POST["signupEmail"], FILTER_VALIDATE_EMAIL) == false) {
			$emailError = true;
		}
		else {
			//enter them into the database
	    	$result = $connection->prepare("insert into Person (user, email, firstName, lastName, pass) values ('".$_POST['signupUsername']."', '".$_POST['signupEmail']."', '".$_POST['signupFirstName']."', '".$_POST['signupLastName']."', PASSWORD('".$_POST['signupPass']."'))");
    	
    		$result->execute();

    		//automatically log the new user in
			$_SESSION["authenticated"] = true;
			$_SESSION["username"] = $_POST["signupUsername"];

			//redirect
			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
			header("Location: http://$host$path/home.php");
			exit;
		}
    }
?>

<div class="modal fade bs-modal-sm log-signup" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<?php
				if ($connectionFailed === true) { ?>
					<h4><b>Error</b></h4>
					Account database not found. Please try again later
				<?php
				}
				else { ?>
				<form class="form-horizontal" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					<fieldset>
						<div class="group">
							<h4><b>Sign up</b></h4>
						</div>
						<div class="group">
							<!--first name-->
							<input class="input" required="" type="text" id="signupFirstName" name="signupFirstName"><span class="highlight"></span><span class="bar"></span> <label class="label" for="signupFirstName">First Name</label>
						</div>
						<div class="group">
							<!--last name-->
							<input class="input" required="" type="text" id="signupLastName" name="signupLastName"><span class="highlight"></span><span class="bar"></span> <label class="label" for="signupLastName">Last Name</label>
						</div>
						<div class="group">
							<!--email-->
							<input class="input" required="" type="text" id="signupEmail" name="signupEmail"><span class="highlight"></span><span class="bar"></span> <label class="label" for="signupEmail">Email</label>
						</div>
						<div class="group">
							<!--username-->
							<input class="input" required="" type="text" id="signupUsername" name="signupUsername"><span class="highlight"></span><span class="bar"></span> <label class="label" for="signupUsername">Username</label>
						</div>
						<div class="group">
							<!--password-->
							<input class="input" required="" type="password" id="signupPass" name="signupPass"><span class="highlight"></span><span class="bar"></span> <label class="label" for="signupPass">Password</label>
						</div><em>Minimum 8 Characters</em>
						<div class="control-group">
							<div class="row">
								<div class="col-lg-6">
									<button class="btn btn-warning btn-block" id="confirmSignup" name="confirmSignup">Sign Up</button>
								</div>
								<div class="col-lg-6">
									<button type="button" class="btn btn-block" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</fieldset>
					<?php
					if (isset($signupError)) {
					    echo "<span style=\"color: red\">An account with this username or email already exists!</span>";
					}
					else if (isset($emailError)) {
						echo "<span style=\"color: red\">This email address is not valid!</span>";
					}
					?>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($signupError) || isset($emailError)) {
    echo "<script> $(document).ready(function(){ $('#signupModal').modal('show'); }); </script>";
}
?>