<?php

require('config.php');
include('profile.html');

session_start();


//$id = get_current_user_id();
// $_SESSION["login_user"] = $id;
$id = $_GET['id'];

if($_POST["save"])
  {
      
  $institution=$_POST['institution'];
  $degree=$_POST['degree'];
  $start=$_POST['startyear'];
  $end=$_POST['endyear'];

  $query="INSERT INTO education(yearStart,yearEnd,institution,degree,userid)VALUES
                                      ('$start','$end','$institution','$degree',$id) ";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }
  }

?>