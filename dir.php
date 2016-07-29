<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>递归遍历指定文件夹：</title>
</head>
<body>

<?php
header("Content-Type: text/html;charset=utf-8");
function listDir($dir)
{
	if(is_dir($dir))
   	{
     	if ($dh = opendir($dir)) 
		{
        	while (($file = readdir($dh)) !== false)
			{
     			if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
				{
     				echo "<font color='red'>文件名：</font>",$file,"<br><hr>";
     				listDir($dir."/".$file."/");
     			}
				else
				{
         			if($file!="." && $file!="..")
					{
         				echo $file."<br>";
      				}
     			}
        	}
        	closedir($dh);
     	}
   	}
}

listDir("./");


?>
</body>
</html>