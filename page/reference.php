<?php

require_once("config.php");
include('profile.html');

session_start();
//extract($_POST);
$id = get_current_user();

//$id=get_current_user();

// if(isset($_GET["id"]))

//     {
//         $sql = "SELECT email FROM user_account WHERE id = '$id'";
//     $result = mysqli_query($link,$sql) or die( mysqli_error($link));
//     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
//         $email = $row["email"];

//         echo $email;
//     }
    


    
if($_POST["save"])
  {
      
  $fullname=$_POST['fullnam'];
  $occupation=$_POST['occupatioN'];
  $phone=$_POST['phonE'];
  $email=$_POST['emaiL'];
  
  $query="INSERT INTO `reference`(`full-name`,`position`,`phone`,`email`,`userid`) VALUES ('$fullname','$occupation','$phone','$email',1)";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
 
//   if($update)
//   {
//       $msg="Successfully Updated!!";
//       echo "<script type='text/javascript'>alert('$msg');</script>";
//       header('Location:index.php');
//   }
//   else
//   {
//      $errormsg="Something went wrong, Try again";
//       echo "<script type='text/javascript'>alert('$errormsg');</script>";
//   }
  }
?>