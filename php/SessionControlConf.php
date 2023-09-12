<?php

$username = $logmsg = $loggedin = "";
session_start();
  if (isset($_SESSION['username'])){
    $username =  $_SESSION['username'];
    $usernameorig = $_SESSION['usernameorig'];
    require 'query.php';
    $querypic = ("select user_pic, user_email_orig_case from User where user_name = '$username';");
    $result = sendQuery($querypic);
    $userpic = $result[0]['user_pic'];
    $logmsg = ("Logged in as $usernameorig <img src='$userpic' style='width:30px;height:30px;'>");
    $_SESSION['logmsg'] = $logmsg;
    $loggedin = true;
    
  } else{
    $username = null;
    $logmsg = 'Welcome Guest';
    $loggedin = false;
    if($_SERVER['PHP_SELF'] === '/My_Account.php'){
      echo '<script type="text/javascript">alert("You must login before accessing this page.")</script>';
      echo '<script type="text/javascript">location.href = "../Login.php";</script>';
    }
  }
  
?>

