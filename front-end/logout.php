<?php 
  //enable sessions
  session_start();

  //delete cookies
  setcookie("user", "", time() - 3600);
  setcookie("pass", "", time() - 3600);

  //log user out
  setcookie(session_name(), "", time() - 3600);
  session_destroy();
    
  //redirect to home
  header("Location: home.php");
  exit()
?>