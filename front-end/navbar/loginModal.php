<?php
    //enable sessions
    session_start();

    //should get these from a database later. Same username and password as the in-class demos for now
    define("USER", "cs372");
    define("PASS", "pfw");
    
    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        //if username and password are valid, log user in
        if ($_POST["user"] == USER && $_POST["pass"] == PASS) {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;

            // save username in cookie for a week
            setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);

            //save password in cookie for a week if requested
            if ($_POST["remember"]) {
                setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);
            }

            $host = $_SERVER['HTTP_HOST'];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: http://$host$path/home.php");
            exit;
        }
    }
?>

<div class="modal fade bs-modal-sm log-signin" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body">
				<div class="tab-content" id="myTabContent">
				    <form class="form-horizontal" action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
						<fieldset>
							<!-- Sign In Form -->
							<div class="group">
								<h4><b>Sign in</b></h4>
							</div>
							<div class="group">
								<!--username-->
								<input class="input" required="" type="text" name="user"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Email address</label>
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
								<label class="control-label" for="signin"></label>
								<div class="controls">
									<button class="btn btn-warning btn-block" id="signin" name="signin">Log In</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>