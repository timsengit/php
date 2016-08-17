<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/15
 * Time: 16:06
 */
include "./PDOX.php";
$dsn = "mysql:host=localhost;dbname=jinlingdb";
$pdo = new PDOX($dsn, 'jinling', 'JLining');
//echo "sss";
foreach ($pdo->query('SELECT * from aboutus') as $row) {
    //print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    //   echo $row['id'] . " " . $row['name'] . "  " . $row['registerIp'];
    echo $row['article'];
}
