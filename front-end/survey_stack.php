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
        
        $input_name = $_POST['name']; 
        $email = $_POST['email']; 
        
        
        $sqlQuery="INSERT INTO `survey`
        (`Snack_ID`, `question1`, `Gender`, `Location`, `Purchase_Snack`, `Purchase_SYes`, `Purchase_SNo`, `Purchase_Drink`, `Purchase_DYes`, `Purchase_DNo`, `Prefer_price`, `Purchase_resaon`, `Payment`, `snack1`, `snack2`, `snack3`, `drink1`, `drink2`, `drink3`, `rmv_snack`, `rmv_drink`, `most_vd_building`, `most_vd`, `least_vd_building`, `least_vd`, `helpful`, `helpful_no`, `extra_opinion`, `name`, `email`) VALUES
        ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25],[value-26],[value-27],[value-28],[value-29],[value-30])";
        
            
    }

?>