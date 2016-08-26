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
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
            <?php foreach ($pdo->query('SELECT * from info') as $row) {
    ;?>
        	<li><a href=<?php echo "article.php?id=" . $row['id']; ?>><?php echo $row['name']; ?>  </a><span class="time2"><?php echo $row['addTime']; ?></span></li>
            <?php }
;?>

        </ul>
        <div class="blank10"></div>
        <div class="pages"><a href="#" class="pre">上一页</a><a class="current">1</a><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=2" class="next">下一页</a></div>
    </div>
<?php include "rightMessage.php";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
