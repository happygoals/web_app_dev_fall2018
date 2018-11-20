<?php
	//enable sessions
    session_start();

    require_once ('connection.php');
    
    //check if all fields were submitted and if the signup was previously deemed valid
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
    	//ake sure there isn't an account already registered with this username or email
		$result = $connection->prepare("SELECT * FROM Person WHERE (user= ? OR email = ?)");
		$result->execute(array($_POST["username"], $_POST["email"])) or die(mysqli_error());        

		//check whether we found a row
		if ($result->rowCount() == 1) {
			$signupError = true;
		}
		else {
			//enter them into the database
	    	$result = $connection->prepare("insert into Person (user, email, firstName, lastName, pass) values ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['firstName']."', '".$_POST['lastName']."', PASSWORD('".$_POST['password']."'))");
    	
    		$result->execute();
    	
    		//automatically log the new user in
			$_SESSION["authenticated"] = true;
			$_SESSION["username"] = $_POST["username"];

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
				<form class="form-horizontal" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					<fieldset>
						<div class="group">
							<h4><b>Sign up</b></h4>
						</div>
						<div class="group">
							<!--first name-->
							<input class="input" required="" type="text" id="firstName" name="firstName"><span class="highlight"></span><span class="bar"></span> <label class="label" for="firstName">First Name</label>
						</div>
						<div class="group">
							<!--last name-->
							<input class="input" required="" type="text" id="lastName" name="lastName"><span class="highlight"></span><span class="bar"></span> <label class="label" for="lastName">Last Name</label>
						</div>
						<div class="group">
							<!--email-->
							<input class="input" required="" type="text" id="email" name="email"><span class="highlight"></span><span class="bar"></span> <label class="label" for="email">Email</label>
						</div>
						<div class="group">
							<!--username-->
							<input class="input" required="" type="text" id="username" name="username"><span class="highlight"></span><span class="bar"></span> <label class="label" for="username">Username</label>
						</div>
						<div class="group">
							<!--password-->
							<input class="input" required="" type="password" id="password" name="password"><span class="highlight"></span><span class="bar"></span> <label class="label" for="password">Password</label>
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
				</form>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($signupError)) {
    echo "<script> $(document).ready(function(){ $('#signupModal').modal('show'); }); </script>";
}
?>