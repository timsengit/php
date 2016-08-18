<?php
include "./connecter/PDOX.php";
include "./connecter/DBConfig.php";
$pdo     = new PDOX($DSN, $USER, $PASS);
$name    = $_POST['name'];
$mobile  = $_POST['mobile'];
$phone   = $_POST['phone'];
$fax     = $_POST['fax'];
$address = $_POST['address'];
$arr     = array('address' => $address, 'name' => $name, 'mobile' => $mobile, 'phone' => $phone, 'fax' => $fax);
$pdo->update('contactus', $arr, 1);
header('Location:about_us.php');
