<?php
include "./connecter/Pdox.php";
include "./connecter/DbConfig.php";
$pdo  = new Pdox($DSN, $USER, $PASS);
$id   = $_POST['id'];
$name = $_POST['username'];
$pass = $_POST['password'];
$arr  = array('name' => $name, 'pass' => $pass);
$pdo->update('admin', $arr, "id=$id");
header('Location:userList.php');
