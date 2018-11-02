<?php
	function headerFunction($navbarStyle, $navbarCustomStyle, $callingFile) {
		$callingFile = str_replace(".php", "", $callingFile);
		$exploded = explode("/", $callingFile);
		$callingFile = $exploded[sizeof($exploded)-1];
?>
	<nav class="navbar navbar-expand <?php echo $navbarStyle ?> static-top" <?php echo "style=\"".$navbarCustomStyle."\"" ?> >
		<a class="navbar-brand mr-1" href="home.php"><img alt="Logo" src="resource/logo.png" style="width:171px; height:47px;"></a>
		<ul class="navbar-nav">
<?php
	foreach (array("Home", "Survey", "Analytics") as $link) { ?>
			<li class="nav-item<?php if ($callingFile == strtolower($link)) {echo " active";}?>">
				<a class="nav-link" href="<?php echo strtolower($link).".php"; ?>"><?php echo $link ?></a>
			</li>
<?php } ?>
		</ul>
		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle"><i class="fas fa-bars"></i></button> <!-- Navbar Search -->
		<div class="ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<!--hacky, someone else can deal with this-->
		</div>
		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow">
				<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="userDropdown" role="button"><i class="fas fa-user-circle fa-fw">Admin</i></a>
				<div aria-labelledby="userDropdown" class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" data-target=".log-signin" data-toggle="modal" href="#signin">Sign in</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" data-target=".log-signup" data-toggle="modal" href="#signup">Sign up</a>
				</div>
			</li>
		</ul>
	</nav>
	<!-- Login Modal -->
	<div class="modal fade bs-modal-sm log-signin" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<div class="tab-content" id="myTabContent">
					    <form class="form-horizontal">
							<fieldset>
								<!-- Sign In Form -->
								<div class="group">
									<h4><b>Sign in</b></h4>
								</div>
								<!-- Text input-->
								<div class="group">
									<input class="input" required="" type="text"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Email address</label>
								</div><!-- Password input-->
								<div class="group">
									<input class="input" required="" type="password"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Password</label>
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
	<!-- Login Modal -->
	<div class="modal fade bs-modal-sm log-signup" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-body">
					<div class="tab-content" id="myTabContent">
							<form class="form-horizontal">
								<fieldset>
									<!-- Sign Up Form -->
									<br>
									<h4><b>Register</b></h4>
									<!-- Text input-->
									<div class="group">
										<input class="input" required="" type="text"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">First Name</label>
									</div>
									<!-- Text input-->
									<div class="group">
										<input class="input" required="" type="text"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Last Name</label>
									</div>
									<!-- Password input-->
									<div class="group">
										<input class="input" required="" type="text"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Email</label>
									</div>
									<!-- Text input-->
									<div class="group">
										<input class="input" required="" type="password"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Password</label>
									</div><em>1-8 Characters</em>
									<!-- Button -->
									<div class="control-group">
										<label class="control-label" for="confirmsignup"></label>
										<div class="controls">
											<button class="btn btn-warning btn-block" id="confirmsignup" name="confirmsignup">Sign Up</button>
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
	<!--modal2-->
	<div aria-hidden="true" aria-labelledby="mySmallModalLabel" class="modal fade bs-modal-sm" id="forgot-password" role="dialog" tabindex="1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="myModalLabel">Password will be sent here. </h6>
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						<fieldset>
							<div class="group">
								<input class="input" required="" type="text"><span class="highlight"></span><span class="bar"></span> <label class="label" for="date">Email address</label>
							</div>
							<div class="control-group">
								<label class="control-label" for="forpassword"></label>
								<div class="controls">
									<button class="btn btn-primary btn-block" id="forpasswodr" name="forpassword">Send</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
	}
?>
