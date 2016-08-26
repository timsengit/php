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
foreach ($_POST['newsid'] as $i) {

    $pdo->delete('news', "id=$i");
    echo $i;
}
header('Location:newsList.php');
