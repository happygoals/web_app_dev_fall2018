<?php
require_once('connection.php');

if (isset($_POST['submit'])) {
    $question1 = $_POST['opt'];         //user type
    $question2 = $_POST['opt2'];        //gender
    $question3 = $_POST['opt3'];        //purchase snacks on campus
    $question3_1 = $_POST['why'];           //why not
    $question3_2 = $_POST['op3.2.0'];       //how often
    $question4 = $_POST['opt4'];        //purchase beverages on campus
    $question4_1 = $_POST['why2'];          //why not
    $question4_2 = $_POST['op4.2.0'];       //how often
    $question5 = $_POST['opt5'];        //preferred payment option
    $question6 = $_POST['opt6'];        //willing to spend
    $question7 = $_POST['opt7'];        //snack influences
    $question8 = $_POST['opt8'];        //beverage influences
    
    //pop up choose one 
    $question9 = $_POST['op9.0.0'];     //most commonly purchased food
    $question9_1 = $_POST['Why3'];          //other type of snacks
    
    $question10 = $_POST['op10.0.0'];   //most commonly purchased beverage
    $question10_1 = $_POST['Why4'];         //other type of drink
    
    $question11 = $_POST['op11'];       //remove food
    $question11_1 = $_POST['Why5'];         //other
    
    $question12 = $_POST['op12'];       //remove beverage
    $question12_1 = $_POST['Why6'];         //other
    
    $question13 = $_POST['locatons13']; //where to put new vending machine
    $question13_1 = $_POST['vendtypes'];    //type
    $question14 = $_POST['locatons14']; //where to remove vending machine
    $question14_1 = $_POST['vendtypes'];    //type
    
    $question15 = $_POST['opt15'];      //was the survey biased
    $question15_1 = $_POST['Why7'];         //why
    
    $question16 = $_POST['Why8'];       //anything else to share
    
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
        
    //execute query
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