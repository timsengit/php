<?php
require_once("./functions.php");

#处理Post请求"1547681531@qq.com"
$useremail=$_POST['email'];
	
#邮件
$flag = sendMail($useremail,'Tim to you:',
	"send email test...");
if($flag){
    echo "successemail";
}else{
    echo "failemail";
}


?>