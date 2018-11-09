<?php
	session_start();

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
 
		<div class="ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<!--hacky, someone else can deal with this-->
		</div>
		<!-- Account dropdown -->
<?php
	//different dropdown options if logged in or not
	
	if ($_SESSION["authenticated"] == true) { //logged in
		include 'navbar/loggedInDropdown.php';
	}
	else if ($_SESSION["authenticated"] == false) { //logged out
	    include 'navbar/loggedOutDropdown.php';
	}
?>
	</nav>
	
<?php
	//include modals for login, signup, forgot password
	include 'navbar/loginModal.php';
	include 'navbar/signupModal.php';
	include 'navbar/forgotPasswordModal.php';
	
//close the bracket (this sort of formatting is what sucks about PHP)
}
?>