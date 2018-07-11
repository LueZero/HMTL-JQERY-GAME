<?
//图片的基本修改
$jpg = "img/1.jpg";
$png = "img/2.png";
$gif = "img/1.gif";
$imagejpg = imagecreatefromjpeg($jpg);
$imagepng = imagecreatefrompng($png);
$imagegif = imagecreatefromgif($gif);
$green = imagecolorallocate($imagejpg, 0, 255, 0);
imageline($imagejpg, 0, 0, 111, 111, $green);
//输出宽度和高度
echo "imagejpg width:".imagesx($imagejpg)."height:".imagesy($imagejpg)."<br>";
echo "imagepng width:".imagesx($imagepng)."height:".imagesy($imagepng)."<br>";
echo "imagegif width:".imagesx($imagegif)."height:".imagesy($imagegif)."<br>";
//返回图片信息（宽、高、类型等）
$arr = getimagesize($jpg);
var_dump($arr);
//保存更改后的图片
imagejpeg($imagejpg,"img/1.jpg");
imagepng($imagepng,"img/2.png");
imagegif($imagegif,"img/1.giff");
//释放资源
imagedestroy($imagejpg);
imagedestroy($imagepng);
imagedestroy($imagegif);

//缩放图片50%
$filename =  "img/1.jpg";
$per = 0.5;
list($width,$height) = getimagesize($filename);
$n_w = $width*$per;
$n_h = $height*$per;
$new = imagecreatetruecolor($n_w, $n_h);
$img = imagecreatefromjpeg($filename);
//拷贝原图片到新图片，并设置宽高
imagecopyresized($new, $img, 0, 0, 0, 0, $n_w, $n_h, $width, $height);
//等比例缩放
imagejpeg($new,"img/1.jpg");
//资源释放
imagedestroy($new);
imagedestroy($img);


echo $filename =  "img/1.gif";
?>