<a href="home.php">首页</a>
<a href="logout.php">退出</a>
<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 16:28
 */
include "../session/Session.php";
$session = new \Ycf\Lession\Session\Session();
session_start();
$username = $_POST['name'];
$password = $_POST['password'];
echo $username . $password;
$_SESSION['loadName'] = $username;
$session->setSession('loadName', $username);
$session->setSession('passWord', $password);
?>