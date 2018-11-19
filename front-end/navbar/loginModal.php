<?php
    //enable sessions
    session_start();

    require_once ('connection.php');
	
	//if username and password were submitted, check them
	if (isset($_POST["user"]) && isset($_POST["pass"])) {
		//prepare SQL. User can enter either their username or email, check for both
		$result = $connection->prepare("SELECT * FROM Person WHERE (user= ? OR email = ?) AND pass=PASSWORD(?)");

		//execute query
		$result->execute(array($_POST["user"], $_POST["user"], $_POST["pass"])) or die(mysqli_error());        

		//check whether we found a row
		if ($result->rowCount() == 1) {
			//remember that the user is logged in
			$_SESSION["authenticated"] = true;
			
			//set session username. For now, this will display either username or email, whichever they entered. Will fix later
			$_SESSION["username"] = $_POST["user"];

			//redirect
			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
			header("Location: http://$host$path/home.php");
			exit;
		}
		else {
			$invalidLogin = true;
		}
	}
?>

<div class="modal fade bs-modal-sm log-signin" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<?php
				if ($connectionFailed === true) { ?>
					<h4><b>Error</b></h4>
					Login database not found. Please try again later
				<?php
				}
				else { ?>
			    <form class="form-horizontal" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
					<fieldset>
						<!-- Sign In Form -->
						<div class="group">
							<h4><b>Sign in</b></h4>
						</div>
						<div class="group">
							<!--username-->
							<input class="input" required="" type="text" name="user"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Username or email</label>
						</div>
						<div class="group">
							<!--password-->
							<input class="input" required="" type="password" name="pass"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Password</label>
						</div>
						<div class="group">
							<!--remember login-->
							<div class="form-check form-check-inline">
								<input class="form-check-input" name="remember" id="remember" type="checkbox">
								<label class="form-check-label" for="remember">Remember me</label>
							</div>
						</div>
						<div class="forgot-link">
							<a data-target="#forgot-password" data-toggle="modal" href="#forgot">I forgot my password</a>
						</div>
						<div class="control-group">
							<div class="row">
								<div class="col-lg-6">
									<button class="btn btn-warning btn-block" id="signin" name="signin">Log In</button>
								</div>
								<div class="col-lg-6">
									<button type="button" class="btn btn-block" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</fieldset>
					<?php
					if (isset($invalidLogin)) {
					    echo "<span style=\"color: red\">Invalid login!</span>";
					}
					?>
				</form>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($invalidLogin)) {
    echo "<script> $(document).ready(function(){ $('#loginModal').modal('show'); }); </script>";
}
?>