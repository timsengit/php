<?php
include "./connecter/PDOX.php";
include "./connecter/DBConfig.php";
$pdo  = new PDOX($DSN, $USER, $PASS);
$id   = $_POST['id'];
$name = $_POST['username'];
$pass = $_POST['password'];
$arr  = array('name' => $name, 'pass' => $pass);
$pdo->update('admin', $arr, "id=$id");
header('Location:about_us.php');
