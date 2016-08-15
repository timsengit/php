<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/15
 * Time: 15:12
 */
$dsn = "mysql:host=localhost;dbname=ycfdb";
$db  = new PDO($dsn, 'ycf', 'b50unl');
$rs  = $db->query("SELECT* FROM user");
while ($row = $rs->fetch()) {
    print_r($row);
    echo "<pre>";
}
$db = null;
