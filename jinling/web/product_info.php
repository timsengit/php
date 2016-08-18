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
<?php include "top.html";?>
<?php include "../db/connecter/PDOX.php";
$dsn = "mysql:host=localhost;dbname=jinlingdb";
$pdo = new PDOX($dsn, 'jinling', 'JLining');
//echo "sss";
?>
<?php $productId = $_GET['productId'];
$res             = $pdo->query("select * from product WHERE id = $productId");
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品信息<b class="cGrey fn">Product Info</b></h2>
<?php foreach ($res as $row) {;?>
        </div>
        <div class="product">
			<img src=<?php echo $row['pathOfPic']; ?> alt= <?php echo $row['name']; ?>/>
            <p><strong>产品名称</strong>：<?php echo $row['name']; ?></p>
			<p><strong>产品描述</strong>：</p>
            <?php echo $row['description']; ?>
        </div>
        <?php }
?>
    </div>
<?php include "rightMessage.html";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
