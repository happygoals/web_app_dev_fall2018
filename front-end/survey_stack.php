<?php
    
    require_once('connection.php');
    
    $test1 = mysqli_real_escape_string($_REQUEST['opt']);
    
    
    if(isset($_POST['submit']))
    {
        $question1 = $_POST['opt'];         //question 1 from survey 1
        $question2 = $_POST['opt2'];        //gender
        $question3 = $_POST['opt3'];
        $question3_1 = $_POST['why']; 
        $question3_2 = $_POST['op3.2.0'];
        $question4 = $_POST['opt4'];
        $question4_1 = $_POST['why2']; 
        $question4_2 = $_POST['op4.2.0'];
        $question5 = $_POST['opt5'];
        $question6 = $_POST['opt6'];
        $question7 = $_POST['opt7'];
        $question8 = $_POST['opt8'];
        $question9 = $_POST['op9.0.0'];
        $question9_1 = $_POST['Why3'];
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
        
        $input_name = $_POST['name']; 
        $email = $_POST['email']; 
        
        
        $sqlQuery="INSERT INTO `survey`
        (`Snack_ID`, 
        `question1`, `Gender`, `Location`, `Purchase_Snack`, `Purchase_SYes`, `Purchase_SNo`, 
        `Purchase_Drink`, `Purchase_DYes`, `Purchase_DNo`, `Prefer_price`, `Purchase_resaon`, `Payment`, 
        `snack1`, `snack2`, `snack3`, `drink1`, `drink2`, `drink3`, `rmv_snack`, `rmv_drink`, `most_vd_building`, `most_vd`, `least_vd_building`, `least_vd`,
        `helpful`, `helpful_no`, `extra_opinion`, `name`, `email`) VALUES
        ([value-1],
        '$question1','$question2','$question3','$question3_1','$question3_2',[value-7],
        [value-8],[value-9],[value-10],[value-11],[value-12],[value-13],
        [value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25],[value-26],[value-27],[value-28],[value-29],[value-30])";
        
            
    }

?>