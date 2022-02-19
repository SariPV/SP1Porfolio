<?php
require('config.php');
require_once __DIR__ . '/vendor/autoload.php' ;


//echo 'hello';
$temp_userid = 1;

$query ="SELECT * FROM user_profile,user_account WHERE user_account.id=$temp_userid AND user_profile.userid=$temp_userid";
//$education = "SELECT * FROM portfolio WHERE portfolio.userid=$temp_userid";
//    $data =  mysqli_query($link,$education);
$result = mysqli_query($links,$query);
$education ="SELECT * FROM education WHERE userid=$temp_userid";
$results = mysqli_query($links,$education);
if (!$result)
{
    die ('failed to connect mysql database'. mysqli_connect_error());
}
$temp_user = mysqli_fetch_array($result);
if (!$results)
{
    die ('failed to connect mysql database'. mysqli_connect_error());
}

$temp_username = $temp_user['full-name'];
$MyImage = $temp_user['profileImage'];
$position = $temp_user['position'];
$phone = $temp_user['phone'];
$email = $temp_user['email'];
$address = $temp_user['address'];
$profileImage = $temp_user['profileImage'];


//read html template
ob_start();
include("temp1.html");
$original_text = ob_get_contents();
//ob_end_clean();
//$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

// Define a default page size/format by array - page will be 190mm wide x 236mm height
//$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190, 236]]);

// Define a default page using all default values except "L" for Landscape orientation
// $mpdf = new \Mpdf\Mpdf();
// $stylesheet = file_get_contents('style.css'); // Get css content*/
// //$html = file_get_contents('template1.html');

// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($original_text);



//ob_get_clean();
// $mpdf->Output();


//$new_text = $original_text;
///$new_text = str_replace("{UserName}",$temp_username,$new_text);

//$new_text = $original_text;
$original_text = str_replace("{UserName}",$temp_username,$original_text);
$original_text = str_replace("{MyImage}",$MyImage,$original_text);
$original_text = str_replace("{position}",$position,$original_text);
$original_text = str_replace("{phone}",$phone,$original_text);
$original_text = str_replace("{email}",$email,$original_text);
$original_text = str_replace("{address}",$address,$original_text);
$original_text = str_replace("{MyImage}",$profileImage,$original_text);
echo" </ul>";
while($education_list = mysqli_fetch_array($results)){
    echo" <li>";
  $yearStart = $education_list['yearStart'];
 // $original_text = str_replace("{yearStart}",$yearStart,$original_text);
  $yearEnd = $education_list['yearEnd'];
  echo'<h5>'.str_replace("{yearStart}",$yearStart,$original_text). '-' .str_replace("{yearEnd}",$yearEnd,$original_text).'</h5>';
  //$original_text = str_replace("{yearEnd}",$yearEnd,$original_text);
 // echo "</il>";
 echo" </li>";
   
}
echo"</ul>";
//$original_text = str_replace("{yearStart}",$yearStart,$original_text);
echo $original_text;
$mpdf = new \Mpdf\Mpdf();
//$stylesheet = file_get_contents('style.css'); // Get css content*/
//$html = file_get_contents('temp1.html');

//$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($original_text);



ob_get_clean();
$mpdf->Output();

?>
