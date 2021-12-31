<?php
/*
mPDF: Generate PDF from HTML/CSS (Complete Code)
*/

require_once __DIR__ . '/vendor/autoload.php' ;// Include mdpf
$mpdf = new \Mpdf\Mpdf();
//$stylesheet = file_get_contents('style3.css'); // Get css content*/
$html = file_get_contents('r22.html');
//$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html);
// Setup PDF
 // New PDF object with encoding & page size

 ob_clean();  // For sending Output to browser
$mpdf->Output(); // For Download


?>