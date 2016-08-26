<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/18
 * Time: 23:00
 */
include "./connecter/Pdox.php";
include "./connecter/DbConfig.php";
$pdo = new Pdox($DSN, $USER, $PASS);
foreach ($_POST['userid'] as $i) {

    $pdo->delete('admin', "id=$i");
    echo $i;
}
header('Location:userList.php');
