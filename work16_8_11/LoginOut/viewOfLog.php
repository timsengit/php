<?php
session_start();
?>
<h1>Please Login</h1>
<form method="post"action="login.php">
<p>UserName:<input type="text" name="name"></p>
<p>PassWord:<input type="password" name="password"></p>
<p><input type="submit" name="submit" value="Log In"></p>
</form>
<a href="home.php">首页</a>
<a href="logout.php">退出</a>
