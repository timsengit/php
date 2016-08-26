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
$res      = $pdo->query("select * from info WHERE id = $id");
?>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">资讯详情<b class="cGrey fn">Information</b></h2>
        </div>
        <div class="intro">
            <?php foreach ($res as $row) {;?>
                <?php echo $row['article']; ?>
            <?php }
?>
        </div>
    </div>
<?php include "rightMessage.php";?>
    <div class="hackbox"></div>


</div>
<?php include "footer.html";?>
</body>
</html>
