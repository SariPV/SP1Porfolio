<?php
extract($_POST);
require("config.php");

if(isset($_POST['save'])!="")
  {
  $username=mysql_real_escape_string($_POST['username']);
  $usermail=mysql_real_escape_string($_POST['usermail']);
  $usermobile=mysql_real_escape_string($_POST['usermobile']);
  $update=mysql_query("INSERT INTO user_profile(username,emailid,mobileno,created)VALUES
                                      ('$username','$usermail','$usermobile',now())");
  
  if($update)
  {
      $msg="Successfully Updated!!";
      echo "<script type='text/javascript'>alert('$msg');</script>";
      header('Location:index.php');
  }
  else
  {
     $errormsg="Something went wrong, Try again";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
  }
  }
?>