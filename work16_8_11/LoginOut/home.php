<h1>首页</h1>
<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 16:37
 */
include "../session/Session.php";
$session = new \Ycf\Lession\Session\Session();
session_start();
if ($session->showSession('loadName') == '') {
    header('Location:viewOfLog.php');
}
echo "loadName: " . $_SESSION['loadName'];
echo "<pre>";
echo "password:" . $session->showSession('passWord');
?>