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
<?php $id = $_GET['id'];
$res      = $pdo->query("select * from news WHERE id = $id");
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">详细信息<b class="cGrey fn">News</b></h2>
        </div>
        <?php foreach ($res as $row) {;?>
        <div class="article">
			<h3><?php echo $row['name']; ?></h3>
			<h4>发布时间 : <?php echo $row['addTime']; ?></h4>
            <?php echo $row['news']; ?>
        </div>
        <?php }
?>
    </div>
<?php include "rightMessage.php";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
