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

echo "<pre>" . 11111111111;
//echo "ss" . $count = $pdo->getcount('test');
foreach ($pdo->query("SELECT * from admin WHERE id=3") as $row);
//foreach ($pdo->query('SELECT * from admin order by id DESC ') as $row);
echo $row['name'];
