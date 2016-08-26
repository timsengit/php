<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php include "./session/Session.php";
session_start();
$session = new \Jinling\Session\Session();?>
<div id="append"></div>
<div class="container">
	<h3>联系我们</h3>
    <div class="mainbox">
        <form action="changeContactUs.php" method="post">
            <table style="width:700px;">
                <td class="login">
                    <table class="login_tab">
                        <tr>
                            <td>联系人:</td>
                            <td><input type="text" id="name" tabindex="1" class="txt" name="name"/></td>
                        </tr>
                        <tr>
                            <td>手机:</td>
                            <td><input type="text" value="" id="mobile" tabindex="2" class="txt" name="mobile"/></td>
                        </tr>
                        <tr>
                            <td>固定电话:</td>
                            <td><input type="text" value="" id="phone" tabindex="2" class="txt" name="phone"/></td>
                        </tr>
                        <tr>
                            <td>传真:</td>
                            <td><input type="text" value="" id="fax" tabindex="2" class="txt" name="fax"/></td>
                        </tr>
                        <tr>
                            <td>验证码:</td>
                            <td><input type="text" value="" tabindex="3" class="txt" name="imgcode" style="width:70px;"/> <img id="imgcode" src="images/imgcode.gif" title="看不清楚，点击换一张"/></td>
                        </tr>
                        <tr>
                            <td>地址:</td>
                            <td><textarea rows="10" cols="80" name="address"></textarea></td>
                        </tr>
                    </table>

                </td>
                <tbody>
                    <tr>
                    	<td>添加人：<?php echo $session->showSession("name"); ?> &nbsp;&nbsp;&nbsp;添加时间：<?php echo date('Y-m-d'); ?></td>
                    </tr>
                    <tr>
                        <td><input value="提 交" class="btn" type="submit"></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>
