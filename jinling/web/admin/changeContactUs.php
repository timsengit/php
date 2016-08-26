<?php
include "./connecter/Pdox.php";
include "./connecter/DbConfig.php";
$pdo     = new Pdox($DSN, $USER, $PASS);
$name    = $_POST['name'];
$mobile  = $_POST['mobile'];
$phone   = $_POST['phone'];
$fax     = $_POST['fax'];
$address = $_POST['address'];
$arr     = array('address' => $address, 'name' => $name, 'mobile' => $mobile, 'phone' => $phone, 'fax' => $fax);
$pdo->update('contactus', $arr, 1);
header('Location:aboutUs.php');
