<?php
session_start();
?>

<html lang="en">
<head>
	<?php
		include 'head.php';
		generateHead();
	?>
</head>
<body>
<?php

if (isset($_POST["deleteAccount"])) {
    //user has selected and confirmed that they want to delete their account. Carry out the db operation
    require ('connection.php');
    
    $result = $connection->prepare("DELETE FROM Person WHERE user= ?");
	$result->execute(array($_SESSION["username"])) or die(mysqli_error());
	
	//log out the now-nonexistent user
	setcookie("user", "", time() - 3600);
    setcookie("pass", "", time() - 3600);

    //log user out
    setcookie(session_name(), "", time() - 3600);
    session_destroy();
    
    include 'navbar.php';
    include "common.php";
    headerFunction("navbar-dark bg-dark", "", __FILE__);
    ?>
    <div class="container-fluid text-center">
        <div class="text-left" style="padding-top: 70px; background: white">
            <h2>Your account has been successfully deleted</h2>
            <p>We're sorry to see you go.</p>
        </div>
    </div>
    
    <?php
}
else {
    include 'navbar.php';
    include "common.php";
    headerFunction("navbar-dark bg-dark", "", __FILE__);
    ?>
    
    <div class="container-fluid text-center">
		<div class="row row-eq-height" style="padding-top: 70px">
			<div class="col-sm-2 sidenavl">
			    <h3>Account Settings</h3>
			</div>
			<div class="col-sm-8 text-left">
			<?php
			//check if user is actually logged in
			if ($_SESSION["authenticated"] == true) {
			    //logged in
			    require ('connection.php');
                $stmt = $connection->prepare("SELECT * FROM Person WHERE (user = ?)");
                $stmt->execute(array($_SESSION["username"])) or die(mysqli_error());
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <div>
                    <table class="table" id="table" style="-ms-overflow-style: -ms-autohiding-scrollbar; max-height: 200px;">
                        <tbody>
                            <tr>
                                <th>Username:</th>
                                <td><?php echo $result["user"] ?></td>
                            </tr>
                            <tr>
                                <th>Name:</th>
                                <td><?php echo $result["firstName"]." ".$result["lastName"] ?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php echo $result["email"] ?></td>
                            </tr>
                            <tr>
                                <th>Privilege level:</th>
                                <td>
                                    <?php
                                    if ($result["isAdmin"] == true) {
                                        echo "Administrator";
                                    }
                                    else {
                                        echo "Standard";
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <!--delete account option-->
                    <form action="" method="post">
                        <button type="submit" class="btn btn-warning" onclick="return confirmDelete();" name="deleteAccount">Delete my account</button>
                    </form>
                    <script>
                        function confirmDelete() {
                            var r = confirm("This will delete your account and cannot be undone. Are you sure?");
                            return r;
                        }
                    </script>
                </div>
                <?php
			}
			else {
			    //logged out, user should not be here
			    echo "<h2>You do not have permission to access this page</h2>";
			}
			?>
			</div>
			<div class="col-sm-2 sidenav">
			</div>
		</div>
	</div>
<?php
}
?>
	<?php include "footer.php" ?>
</body>
</html>