<?php

require_once("config.php");
include('profile.html');

session_start();
extract($_POST);
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
    

// $sql=mysqli_query($link,"SELECT * FROM user_profile where userid=1");
// if(mysqli_num_rows($sql)>0)
// {
//   if(isset($_POST["save"]))
//   {
//     $pname = rand(1000,10000)."-".$_FILES["profileImage"]["name"];
//     $tname = $_FILES["files"]["tmp_name"];
//     $uploads_dir = '/images';
//     move_uploaded_file($tname,$uploads_dir.'/'.$pname);
//   $fullname=mysqli_real_escape_string($link,$_POST['fullname']);
//   $occupation=mysqli_real_escape_string($link,$_POST['occupation']);
//   $address=mysqli_real_escape_string($link,$_POST['address']);
//   $phone=mysqli_real_escape_string($link,$_POST['phone']);
//   $website=mysqli_real_escape_string($link,$_POST['website']);
//   $query="UPDATE user_profile SET  profileImage` = '$pname',`full-name` = '$fullname',`position` = '$occupation',`address` = '$address',`phone` = '$phone',`website` = '$website' where  userid = 1";
//   $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
//   header ("Location: profile2.php");
//  }
// }
    
if(isset($_POST["save"]))
  {
    $id = $_GET['id'];
    $pname = rand(1000,10000)."-".$_FILES["profileImage"]["name"];
    $tname = $_FILES["files"]["tmp_name"];
    $uploads_dir = '/images';
    move_uploaded_file($tname,$uploads_dir.'/'.$pname);
  $fullname=mysqli_real_escape_string($link,$_POST['fullname']);
  $occupation=mysqli_real_escape_string($link,$_POST['occupation']);
  $address=mysqli_real_escape_string($link,$_POST['address']);
  $phone=mysqli_real_escape_string($link,$_POST['phone']);
  $website=mysqli_real_escape_string($link,$_POST['website']);
  $query="INSERT INTO `user_profile`(`id`,`profileImage`,`full-name`,`position`,`address`,`phone`,`website`,`userid`)VALUES
                                      ('$id','$pname','$fullname','$occupation','$address','$phone','$website',1) ON DUPLICATE KEY UPDATE `profileImage` = '$pname',`full-name` = '$fullname',`position` = '$occupation',`address` = '$address',`phone` = '$phone',`website` = '$website',`userid`=1";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
 
  header ("Location: login.html");
  // if($update)
  // {
  //     $msg="Successfully Updated!!";
  //     echo "<script type='text/javascript'>alert('$msg');</script>";
  //     header('Location:index.php');
  // }
  // else
  // {
  //    $errormsg="Something went wrong, Try again";
  //     echo "<script type='text/javascript'>alert('$errormsg');</script>";
  // }
 }
?>