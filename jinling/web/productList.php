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
include "../db/DbConfig.php";
$pdo = new Pdox($DSN, $USER, $PASS);
//echo "sss";
$id = $_GET['id'];
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
        </div>
        <ul class="list_l">
            <?php
if ($id == '') {
    //echo "空空。。。。。";
    foreach ($pdo->query('SELECT * from product') as $row) {
        ;?>
        	<li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href=<?php echo "productInfo.php?productId=" . $row['id']; ?>><img src=<?php echo "admin/" . $row['pathOfPic']; ?> alt="图片1" /></a>
                </span>
                <span class="listtxt"><a href=<?php echo "productInfo.php?productId=" . $row['id']; ?>><?php echo $row['name']; ?></a></span>
            </li>
            <?php }
}

;?>
            <?php
if ($id != '') {

    foreach ($pdo->query('SELECT * from product where id=' . $id) as $row) {; // echo var_dump($row);
        ?>
                    <li>
                <span class="listimg">
                    <img src="images/tran.gif" class="blank" /><a href=<?php echo "productInfo.php?productId=" . $row['id']; ?>><img src=<?php echo "admin/" . $row['pathOfPic']; ?> alt="图片1" /></a>
                </span>
                        <span class="listtxt"><a href=<?php echo "productInfo.php?productId=" . $row['id']; ?>><?php echo $row['name']; ?></a></span>
                    </li>
                <?php }
}

;?>

        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
        <div class="blank6"></div>
    </div>
<?php include "rightKind.php";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
