<?php
include "./phpqrcode/phpqrcode.php";

$PNG_TEMP_DIR="./phpqrcodeimg/";
$data = 'demo qrcode'; // data  
$ecc = 'H'; // L-smallest, M, Q, H-best  
$size = 10; // 1-50  
//$filename = $PNG_TEMP_DIR.'qrcode_'.time().'.png'; 
$filename = $PNG_TEMP_DIR.'qrcode_'.'.png'; 
QRcode::png($data, $filename, $ecc, $size, 2);

//echo '<img src="'.basename($filename).'" />';
echo '<img src="'."./phpqrcodeimg/qrcode_.png".'"/>';
?>