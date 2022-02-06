<?php
extract($_POST);
require("config.php");
$sql=mysqli_query($link,"SELECT * FROM user_account where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
if (isset($_POST['submit']))
{
    $query="INSERT INTO user_account( email,password,role ) VALUES ('$email', 'md5($password)', 'US')";
    $sql=mysqli_query($link,$query)or die("Could Not Perform the Query");
    header ("Location: index.html");
}
    
else {
	echo "Error.Please try again";
	
}

?>