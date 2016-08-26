<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<?php include "top.html";?>
<?php include "../db/connecter/Pdox.php";
$dsn = "mysql:host=localhost;dbname=jinlingdb";
$pdo = new Pdox($dsn, 'jinling', 'JLining');
//echo "sss";
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">联系我们<b class="cGrey fn">Contact us</b></h2>
        </div>
        <div class="intro" style="height:167px">
            <?php
foreach ($pdo->query('SELECT * from contactus') as $row) {
    echo '地址:' . $row['address'] . "<pre>";
    echo '联系人：' . $row['name'] . "<pre>";
    echo '移动电话：' . $row['mobile'] . "<pre>";
    echo '固定电话：' . $row['phone'] . "<pre>";
    echo '传真：' . $row['fax'] . "<pre>";
}
?>

        </div>
        <div class="title">
        	<h2 class="cBlue fB">我的位置<b class="cGrey fn">Map</b></h2>
        </div>
        <div class="intro">
        	<iframe width="360" height="266" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=q&amp;source=s_q&amp;hl=zh-CN&amp;geocode=&amp;q=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;aq=&amp;brcurrent=3,0x3402ffaca010ae9b:0x826837df2eae7a0e,1,0x340301fe46c655a3:0xc549ef142225757a%3B5,0,0&amp;brv=25.1-b20b3018_4134eab6_98868b16_719d4a7b_295494d9&amp;sll=23.129163,113.264435&amp;sspn=0.89159,1.150818&amp;g=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82&amp;ie=UTF8&amp;hq=&amp;hnear=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;t=m&amp;ll=23.086838,113.320971&amp;spn=0.021002,0.030813&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://ditu.google.cn/maps?f=q&amp;source=embed&amp;hl=zh-CN&amp;geocode=&amp;q=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;aq=&amp;brcurrent=3,0x3402ffaca010ae9b:0x826837df2eae7a0e,1,0x340301fe46c655a3:0xc549ef142225757a%3B5,0,0&amp;brv=25.1-b20b3018_4134eab6_98868b16_719d4a7b_295494d9&amp;sll=23.129163,113.264435&amp;sspn=0.89159,1.150818&amp;g=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82&amp;ie=UTF8&amp;hq=&amp;hnear=%E5%B9%BF%E4%B8%9C%E7%9C%81%E5%B9%BF%E5%B7%9E%E5%B8%82%E6%B5%B7%E7%8F%A0%E5%8C%BA&amp;t=m&amp;ll=23.086838,113.320971&amp;spn=0.021002,0.030813&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">查看大图</a></small>
        </div>
    </div>
<?php include "rightMessage.php";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
