<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<?php include "top.html";?>
<?php include "../db/connecter/PDOX.php";
include "../db/DBConfig.php";
$pdo = new PDOX($DSN, $USER, $PASS);
//echo "sss";
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">客户留言<b class="cGrey fn">Guestbook</b></h2>
        </div>

        <form action="saveMessage.php" method="post">
            <table>
                <tbody><tr>
                    <th>昵称：</th>
                    <td><input class="txt" type="text" name="username"></td>
                </tr>
                <tr>
                    <th>内容：</th>
                    <td>
                        <textarea name="content"cols="" rows="" style="width:545px;height:138px"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input value="提交" type="submit"></td>
                </tr>
                </tbody></table>
        </form>

    </div>
<?php include "rightMessage.php";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
