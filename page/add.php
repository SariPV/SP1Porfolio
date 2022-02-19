<?php
session_start();
include('profile.html');
extract($_POST);
$id=1;
require("config.php");

if(isset($_GET["id"]))

    {
        $sql = "SELECT email FROM user_account WHERE id = '$id'";
    $result = mysqli_query($link,$sql) or die( mysqli_error($link));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
        $email = $row["email"];
        ob_start();
        $original_text = ob_get_contents();

        echo $email;
    }
    


    
if(isset($_POST['save'])!="")
  {
      
  $fullname=mysql_real_escape_string($_POST['username']);
  $occupation=mysql_real_escape_string($_POST['usermail']);
  $address=mysql_real_escape_string($_POST['usermobile']);
  $phone=mysql_real_escape_string($_POST['usermobile']);
  $website=mysql_real_escape_string($_POST['usermobile']);
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