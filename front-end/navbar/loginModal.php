<?php
    /**
     * login4.php
     *
     * A simple login module that lets a user stay logged in
     * by saving username and, ack, password in cookies.
     *
     * Refer to CS75 (David J. Malan)
     */

    // enable sessions
    session_start();

    // were this not a demo, these would be in some database
    define("USER", "cs372");
    define("PASS", "pfw");
    
    if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        // if username and password are valid, log user in
        if ($_POST["user"] == USER && $_POST["pass"] == PASS)
        {
            // remember that user's logged in
            $_SESSION["authenticated"] = true;

            // save username in cookie for a week
            setcookie("user", $_POST["user"], time() + 7 * 24 * 60 * 60);

            // save password in, ack, cookie for a week if requested
            if ($_POST["keep"])
                setcookie("pass", $_POST["pass"], time() + 7 * 24 * 60 * 60);

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
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
							<!-- Text input-->
							<div class="group">
								<input class="input" required="" type="text" name="user"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Email address</label>
							</div><!-- Password input-->
							<div class="group">
								<input class="input" required="" type="password" name="pass"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Password</label>
							</div>
							<div class="forgot-link">
								<a data-target="#forgot-password" data-toggle="modal" href="#forgot">I forgot my password</a>
							</div><!-- Button -->
							<div class="control-group">
								<label class="control-label" for="signin"></label>
								<div class="controls">
									<button class="btn btn-warning btn-block" id="signin" name="signin">Log In</button>
								</div>
								<div class="controls2" style="margin-left: 142px;">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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