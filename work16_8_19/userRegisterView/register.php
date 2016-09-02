<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 2016/8/29
 * Time: 17:09
 */

include "./ini.php";
include "./Say.php";
$say = new Say($ISDEBUGE);
//上传文件
include "./uploader.php";
$up = new \File\UpLoad\Uploader();
$up->SetFile($_FILES);
$say->sayvar($up->Upload());
//连接数据库保存用户信息
include "./connecter/PDOX.php";
include "./connecter/DbConfig.php";
$pdo = new Pdox($DSN, $USER, $PASS);
if (isset($_POST['submit'])) {
    if (!empty($_POST['username'])) {
        if (!empty($_POST['pass'])) {
            if ($_POST['pass'] == $_POST['passconfirm']) {
                $username      = $_POST['username'];
                $pass          = $_POST['pass'];
                $sexradio      = $_POST['sex'];
                $hobbycheckbox = $_POST['hobby'];
                $hobby         = implode(',', $hobbycheckbox);
                $city          = $_POST['city'];
                $info          = $_POST['info'];
                $pathOfPic     = 'upload/' . $_FILES['file']['name'];
                $arr           = array('userName' => "$username", 'userPass' => "$pass", 'sex' => "$sexradio", 'hobby' => "$hobby", 'city' => "$city",
                    'pathOfPic'                       => "$pathOfPic", 'info'    => "$info");
                var_dump($arr);
                $pdo->insert('userRegister', $arr);
            }
        }

    }

}
