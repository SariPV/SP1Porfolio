<?php

require('config.php');
include('profile.html');

session_start();


//$id = get_current_user_id();
$_SESSION["login_user"] = $id;

if($_POST["save"])
  {
      
  $company=$_POST['company'];
  $description=$_POST['description'];
  $start=$_POST['startyear'];
  $end=$_POST['endyear'];

  $query="INSERT INTO experience(yearStart,yearEnd,company,description,userid)VALUES
                                      ('$start','$end','$company','$description',1) ";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }
  }

?>