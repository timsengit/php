<?php
namespace File\UpLoad;

class Uploader
{
//返回信息
    private $returnStr = '';
    private $ImportFile;
    // 允许上传的图片后缀
    private $allowedExts = array("gif", "jpeg", "jpg", "png");
    private $temp;
    private $extension; // 获取文件后缀名

    public function SetFile($file)
    {
        $this->ImportFile = $file;
        $this->temp       = explode(".", $this->ImportFile["file"]["name"]);
        $this->returnStr .= $this->ImportFile["file"]["size"];
        $this->extension = end($this->temp);
    }
    public function Upload()
    {
////
        if ((($this->ImportFile["file"]["type"] == "image/gif")
            || ($this->ImportFile["file"]["type"] == "image/jpeg")
            || ($this->ImportFile["file"]["type"] == "image/jpg")
            || ($this->ImportFile["file"]["type"] == "image/pjpeg")
            || ($this->ImportFile["file"]["type"] == "image/x-png")
            || ($this->ImportFile["file"]["type"] == "image/png"))
            && ($this->ImportFile["file"]["size"] < 204800) // 小于 200 kb
             && in_array($this->extension, $this->allowedExts)) {
            if ($this->ImportFile["file"]["error"] > 0) {
                $this->returnStr = $this->returnStr . "错误：: " . $this->ImportFile["file"]["error"] . "<br>";
            } else {
                $this->returnStr = $this->returnStr . "上传文件名: " . $this->ImportFile["file"]["name"] . "<br>";
                $this->returnStr = $this->returnStr . "文件类型: " . $this->ImportFile["file"]["type"] . "<br>";
                $this->returnStr = $this->returnStr . "文件大小: " . ($this->ImportFile["file"]["size"] / 1024) . " kB<br>";
                $this->returnStr = $this->returnStr . "文件临时存储的位置: " . $this->ImportFile["file"]["tmp_name"] . "<br>";

                // 判断当期目录下的 upload 目录是否存在该文件
                // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
                if (file_exists("upload/" . $this->ImportFile["file"]["name"])) {
                    $this->returnStr = $this->returnStr . $this->ImportFile["file"]["name"] . " 文件已经存在。 ";
                } else {
                    // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
                    move_uploaded_file($this->ImportFile["file"]["tmp_name"], "upload/" . $this->ImportFile["file"]["name"]);
                    $this->returnStr = $this->returnStr . "文件存储在: " . "upload/" . $this->ImportFile["file"]["name"];
                }
            }
        } else {
            $this->returnStr = $this->returnStr . "非法的文件格式";
        }
        ///////
        return $this->returnStr;
    }
}
