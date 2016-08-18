<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/18
 * Time: 23:00
 */
include "./connecter/PDOX.php";
include "./connecter/DBConfig.php";
$pdo = new PDOX($DSN, $USER, $PASS);
foreach ($_POST['productid'] as $i) {

    $pdo->delete('product', "id=$i");
    echo $i;
}
header('Location:product_list.php');
