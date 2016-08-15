<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/15
 * Time: 16:06
 */
include "./PDOX.php";
$dsn = "mysql:host=localhost;dbname=ycfdb";
$pdo = new PDOX($dsn, 'ycf', 'b50unl');
echo "sss";
foreach ($pdo->query('SELECT * from test') as $row) {
    print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
}
