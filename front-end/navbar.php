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
	
	
<?php
	//include modals for login, signup, forgot password
	include 'navbar/loginModal.php';
	include 'navbar/signupModal.php';
	include 'navbar/forgotPasswordModal.php';
	
//close the bracket (this sort of formatting is what sucks about PHP)
}
?>