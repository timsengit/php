<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<div class="header">
	<h1 class="logo" title="金陵贸易有限公司"><a href="index.html"><img src="images/logo.gif" alt="金陵贸易有限公司" /></a></h1>
    <p class="top_r"><a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a></p>
</div>
<?php include "top.html";
//导入顶部页面?>
<?php include "../db/connecter/PDOX.php";
$dsn = "mysql:host=localhost;dbname=jinlingdb";
$pdo = new PDOX($dsn, 'jinling', 'JLining');
//echo "sss";
?>
<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
<?php
foreach ($pdo->query('SELECT * from aboutus') as $row) {
//print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    //   echo $row['id'] . " " . $row['name'] . "  " . $row['registerIp'];
    echo $row['article'];}
?>

                <a href="#" class="cBlue"> 查看更多...</a>
                <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="product_list.html" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
<?php foreach ($pdo->query('SELECT * from product') as $row) {
    ;?>
        	<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href="product_info.html"><img src=<?php echo $row['pathOfPic']; ?> alt="222222" /></a>
                </span>
                <span class="listtxt"><a href="product_info.html"><?php echo $row['name']; ?></a></span>
            </li>
            <?php }
;?>
        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
            <?php foreach ($pdo->query('SELECT * from news') as $row) {
    ;?>
            <li>
			<a title=<?php echo $row['name']; ?> href="article.html"><?php echo $row['news']; ?></a>
			<span class="time1"><?php echo $row['addTime']; ?></span>
			</li>
            <?php }
;?>

        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.html" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">

            <li><a title="行业资讯行业资讯行业资讯" href="article.html">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>
			 <li><a title="行业资讯行业资讯行业资讯" href="article.html">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>
			 <li><a title="行业资讯行业资讯行业资讯" href="article.html">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>
			 <li><a title="行业资讯行业资讯行业资讯" href="article.html">行业资讯行业资讯行业资讯</a>
			<span class="time1">2016-08-10 13:20:12</span></li>

        </ul>
    </div>
    <div class="hackbox"></div>

	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links">
	    	<a href="www.baidu.com">百度</a> | <a href="www.yaochufa.com">要出发</a> | <a href="www.jd.com">京东</a>
    </p>
</div>
<?php include "footer.html";?>
</body>
</html>
