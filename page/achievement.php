<?php

require('config.php');
include('profile.html');

// session_start();


//$id = get_current_user_id()
 //$id= $_SESSION['id'];
//  $id = $_GET['id'];

if($_POST["save"])
  {
      
  $award=$_POST['award'];
  $year=$_POST['years'];
  

  $query="INSERT INTO `achievement`(`year`,`description`,`userid`)VALUES
                                      ('$year','$award',1)";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }
  }

?>