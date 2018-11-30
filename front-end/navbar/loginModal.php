<?php
    //enable sessions
    session_start();

    require ('connection.php');
	
	//if username and password were submitted, check them
	if (isset($_POST["loginUser"]) && isset($_POST["loginPass"])) {
		//prepare SQL. User can enter either their username or email, check for both
		$stmt = $connection->prepare("SELECT * FROM Person WHERE (user='".$_POST['loginUser']."' OR email = '".$_POST['loginUser']."') AND pass=PASSWORD('".$_POST['loginPass']."')");
		$stmt->execute(array($_POST["loginUser"], $_POST["loginUser"], $_POST["loginPass"])) or die(mysqli_error());        

		//check whether we found a row
		if ($stmt->rowCount() == 1) {
			//remember that the user is logged in
			$_SESSION["authenticated"] = true;
			
			//set session username. Note that the user could have entered either their username OR their email into the login form, so we get the actual username from the database
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION["username"] = $result["user"];

			//redirect
			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
			$page = $_SERVER['REQUEST_URI'];
			header("Location: http://$host$page");
			exit;
		}
		else {
			$loginError = true;
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
					Account database not found. Please try again later
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
							<input class="input" required="" type="text" id="loginUser" name="loginUser"><span class="highlight"></span><span class="bar"></span> <label class="label" for="loginUser">Username or email</label>
						</div>
						<div class="group">
							<!--password-->
							<input class="input" required="" type="password" id="loginPass" name="loginPass"><span class="highlight"></span><span class="bar"></span> <label class="label" for="loginPass">Password</label>
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
					if (isset($loginError)) {
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
if (isset($loginError)) {
    echo "<script> $(document).ready(function(){ $('#loginModal').modal('show'); }); </script>";
}
?>