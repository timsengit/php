<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<link type="text/css" rel="stylesheet" href="style/style.css" />
</head>

<body>
<?php include "top.html";
//导入顶部页面?>
<?php include "../db/connecter/PDOX.php";
include "../db/DBConfig.php";
$pdo = new PDOX($DSN, $USER, $PASS);
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
    echo $row['article'];}
?>

                <a href="about_us.html" class="cBlue"> 查看更多...</a>
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
                    <img src="images/tran.gif" class="blank" /><a href=<?php echo "product_info.php?productId=" . $row['id']; ?>><img src=<?php echo $row['pathOfPic']; ?> alt="222222" /></a>
                </span>
                <span class="listtxt"><a href=<?php echo "product_info.php?productId=" . $row['id']; ?>><?php echo $row['name']; ?></a></span>
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
			<a title=<?php echo $row['name']; ?> href=<?php echo "article.php?id=" . $row['id']; ?>><?php echo $row['news']; ?></a>
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
            <?php
include "../str/StrDoer.php";
$StrDo = new \Str\StrDoer();
foreach ($pdo->query('SELECT * from info') as $row) {
    ;?>

            <li><a title=<?php echo $row['name']; ?> href="article.html"><?php echo $StrDo->six($row['article']); ?></a>
			<span class="time1"><?php echo $row['addTime']; ?></span></li>
            <?php }
;?>


        </ul>
    </div>
    <div class="hackbox"></div>

	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>


        <?php
foreach ($pdo->query('SELECT * from links') as $row) {
    ?>
    <p class="links">
        <a href=<?php echo $row['link']; ?>><?php echo $row['name']; ?></a>
    </p>
        <?php }
;?>

</div>
<?php include "footer.html";?>
</body>
</html>
