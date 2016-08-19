<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑用户资料</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php include "./connecter/PDOX.php";
include "./connecter/DBConfig.php";
$pdo = new PDOX($DSN, $USER, $PASS);
//echo "sss";
$id = $_GET['id'];
echo $id;
?>
<div class="container">
    <h3 class="marginbot">编辑用户资料<a href="user_list.php" class="sgbtn">返回用户列表</a></h3>
    <div class="mainbox">
        <form action="editUser.php" method="post">
            <table class="opt">
                <tbody>
                    <tr>
                        <th>用户名:</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="username" class="txt" type="text">
                        </td>
                    </tr>
                    <tr>
                        <th>密　码:<span style="font-weight:normal"> [密码留空，保持不变]</span></th>
                    </tr>
                    <tr>
                        <td>
                        <input name="password" value="" class="txt" type="password">
                        </td>
                    </tr>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </tbody>
            </table>
            <div class="opt"><input name="submit" value=" 提 交 " class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>
