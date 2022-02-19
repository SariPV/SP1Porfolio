<?php

require('config.php');
include('profile.html');

// session_start();


// //$id = get_current_user_id();
// $_SESSION["login_user"] = $id;

if($_POST["save"])
  {
      
  $skillname=$_POST['skill'];
  $level=$_POST['level'];
  

  $query="INSERT INTO `skill`(`skillname`,`level`,`userid`)VALUES
                                      ('$skillname','$level',1) ";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }
  }

?>