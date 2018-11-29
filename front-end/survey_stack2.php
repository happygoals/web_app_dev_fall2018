<?php
require_once('connection.php');
    
if (isset($_POST['submit'])) {
    $question1 = $_POST['opt'];         //question 1 from survey 1
    $question2 = $_POST['opt2'];        //gender
    $question3 = $_POST['opt3'];        //Purchasee_snack
    
    echo $question1;
    
    $sql = sprintf("INSERT INTO `survey1`(`question1`, `question2`, `question3`) VALUES
        ('$question1','$question2','$question3');");
        
    // execute query
    $result = $connection->query($sql) or die(mysqli_error($connection));  
    
    if ($result === false) {
        die("Could not query database");
    }
    else {
        echo "User was inserted into DB!\n";
    }
}
else {
    echo "was not submittd";
}
?>