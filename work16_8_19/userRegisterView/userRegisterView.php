<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="resiter">
<h1>用户注册界面</h1>
<form action="register.php" method="post" enctype="multipart/form-data" onsubmit="return check(this)">
<table width="297" border="0" bordercolor="#F0F0F0">
  <tr>
    <td width="74" nowrap="nowrap"><div align="right">用户名：</div></td>
    <td width="213"><input name="username" type="text" />&nbsp;</td>
  </tr>
  <tr>
    <td><div align="right">密码：</div></td>
    <td><input name="pass" type="password" /></td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap"><div align="right">确认密码：</div></td>
    <td><input name="passconfirm" type="password" /></td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap"><div align="right">性别：</div></td>
    <td><input name="sex" type="radio" value="1" checked />男
    <input name="sex" type="radio" value="1"  />女</td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap"><div align="right">爱好：</div></td>
    <td nowrap="nowrap"><input name="hobby[]" type="checkbox" value="music" />听音乐
	<input name="hobby[]" type="checkbox" value="movie" />看电影
	<input name="hobby[]" type="checkbox" value="game" />
	玩游戏</td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap">你所在的城市：</td>
    <td><select name="city">
	<option value="bj">北京市</option>
	<option value="gz">广州市</option>
	</select>&nbsp;</td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap"><div align="right">照片：</div></td>
    <td><input type="file" name="file" id="file"></td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap"><div align="right">个人简介：</div></td>
    <td><textarea name="info" cols="30" rows="5"></textarea>&nbsp;</td>
  </tr>
  <tr>
    <td height="23" nowrap="nowrap">&nbsp;</td>
    <td><input type="submit" name="submit" value="提交">
      <input name="重写" type="reset" /></td>
  </tr>
</table>
</form>
<script type="text/javascript">
    function check(form) {
        //判断账号不为空
        if(form.username.value==""){
            alert("请输入账号");
            form.username.focus();
            return false;
        }
        //判断密码不为空
        if(form.pass.value==""){
            alert("请输入密码");
            form.pass.focus();
            return false;
        }
        //判断两次密码要一致
        if(form.pass.value!=form.passconfirm.value){
            alert("两次密码不一致");
            form.passconfirm.focus();
            return false;
        }
        //判断下拉框不为空
        if(form.city.value==""){
            alert("请选择城市");
            form.city.focus();
            return false;
        }
        //判断图片不为空
        if(form.file.value==""){
            alert("请选择图片");
            form.file.focus();
            return false;
        }
        //判断文本不为空
        if(form.info.value==""){
            alert("请输入个人简介");
            form.info.focus();
            return false;
        }
        return true;
    }
</script>
</div>
</body>
</html>
