<a href="../../../work16_8_11/LoginOut/home.php">首页</a>
<a href="../../../work16_8_11/LoginOut/logout.php">退出</a>
<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/13
 * Time: 16:28
 */
include "./session/Session.php";
include "./connecter/Pdox.php";
include "./connecter/DbConfig.php";
$pdo = new Pdox($DSN, $USER, $PASS);
session_start();
$session = new \Jinling\Session\Session();
//session_start();
$username = $_POST['username'];
$password = $_POST['password'];
foreach ($pdo->query("select * from admin WHERE name='$username'") as $row) {
}
//判断用户的合法性
if ($row['id'] != '') {
    if ($row['pass'] == $password) {
        // $_SESSION['username'] = $username;
        $session->setSession("name", $username);
        $session->setSession("pass", $password);
        echo "succ";
        header('Location:index.php');
    } else {
        header('Location:login.php');
    }
} else {
    header('Location:login.php');
}

echo "key ' s value:" . $session->showSession("name"); //echo $username . $password;
echo $_SESSION['name'];
//
;?>