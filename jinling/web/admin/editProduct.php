<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑产品</title>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all">
</head>
<body>
<?php include "./connecter/Pdox.php";
include "./connecter/DbConfig.php";
$pdo = new Pdox($DSN, $USER, $PASS);
$id  = $_GET['id'];
foreach ($pdo->query("SELECT * from product WHERE id=$id") as $row);
//echo $row['name'] . "sssssssssss" . $id;
?>
<div class="container">
    <h3 class="marginbot">编辑产品<a href="productList.php" class="sgbtn">返回产品列表</a></h3>
    <div class="mainbox">
        <form action="changeProduct.php" method="post" enctype="multipart/form-data">
            <table class="opt" style="width:600px;">
                <tbody>
                    <tr>
                        <th>产品名称：</th>
                    </tr>
                    <tr>
                        <td>
                        <input name="name" class="txt" style="width:400px;" type="text"value=<?php echo $row['name']; ?> >
                        </td>
                    </tr>
                    <input name="id" type="hidden"value=<?php echo $id; ?>>
                    <tr>
                        <th>产品描述：</th>
                    </tr>
                    <tr>
                        <td><textarea style="width:400px; height:150px" name="description" ><?php echo $row['description']; ?></textarea></td>
                    </tr>
                </tbody>
            </table>
                        <label for="file">产品图片上传:</label>
                        <br/>
                        <input type="file" name="file[]"id="file" multiple="multiple" />
                        <br/>
            <div class="opt"><input name="submit" value=" 提 交 。。。" class="btn" tabindex="3" type="submit"></div>
        </form>
    </div>
</div>
</body>
</html>
