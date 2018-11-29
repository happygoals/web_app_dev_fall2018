<?php
require_once('connection.php');

if (isset($_POST['submit'])) {
    $question1 = $_POST['opt'];         //question 1 from survey 1
    $question2 = $_POST['opt2'];        //gender
    $question3 = $_POST['opt3'];        //Purchasee_snack
    $question3_1 = $_POST['why'];       //Purchasee_snack _ No_ not
    $question3_2 = $_POST['op3.2.0'];   //Purchasee_snack _ Yes_ how often 
    $question4 = $_POST['opt4'];        //Purchasee_Drink
    $question4_1 = $_POST['why2'];      //Purchasee_drink _ No_ not
    $question4_2 = $_POST['op4.2.0'];   //Purchasee_drink _ Yes_ how often 
    $question5 = $_POST['opt5'];        //Prefer_price
    $question6 = $_POST['opt6'];
    $question7 = $_POST['opt7'];
    $question8 = $_POST['opt8'];
    
    //pop up choose one 
    $question9 = $_POST['op9.0.0'];
    $question9_1 = $_POST['Why3'];      //other type of snacks 
    
    $question10 = $_POST['op10.0.0'];
    $question10_1 = $_POST['Why4'];
    
    $question11 = $_POST['op11'];
    $question11_1 = $_POST['Why5'];
    
    $question12 = $_POST['op12'];
    $question12_1 = $_POST['Why6'];
    
    //dropdown list - need to update
    $question13 = $_POST[''];  
    $question13_1 = $_POST[''];
    $question14 = $_POST[''];  
    $question14_1 = $_POST[''];
    
    $question15 = $_POST['opt15'];  
    $question15_1 = $_POST['Why7'];
    $question16 = $_POST['Why8'];
    
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    
    $sql = sprintf("INSERT INTO `survey1`(`question1`, `question2`, `question3`, `question3_1`, `question3_2`, 
        `question4`, `question4_1`, `question4_2`, `question5`, `question6`, `question7`, `question8`, 
        `question9`, `question9_1`, `question10`, `question10_1`, `question11`, `question11_1`, 
        `question12`, `question12_1`, `question13`, `question13_1`, `question14`, `question14_1`,
        `question15`, `question15_1`, `question16`, `name`, `email`) VALUES
        ('$question1','$question2','$question3','$question3_1','$question3_2',
        '$question4','$question4_1','$question4_2','$question5','$question6','$question7','$question8',
        '$question9','$question9_1','$question10','$question10_1','$question11','$question11_1',
        '$question12','$question12_1','$question13','$question13_1','$question14','$question14_1',
        '$question15','$question15_1','$question16','$name','$email');");
        
    // execute query
    $result = $connection->query($sql) or die(mysqli_error($connection));  
    
    if ($result === false) {
        die("Could not query database");
    }
    else {
        echo "Record was inserted into DB!\n";
    }
}
else {
    echo "was not submitted";
}
?>