<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/18
 * Time: 21:49
 */
include "./connecter/PDOX.php";
include "./connecter/DBConfig.php";
$pdo = new PDOX($DSN, $USER, $PASS);

echo "<pre>";
echo "ss" . $count = $pdo->getcount('test');
