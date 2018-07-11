<?
/**
 * 等比例缩放
 * @param 源 $res
 * @param 缩放后的最大宽 $width
 * @param 缩放后的最大高 $height
 * @param 目标 $new
 */
function thum($res,$width,$height,$newname){
    list($s_w,$s_h) = getimagesize($res);
    if ($width && ($s_w < $s_h)) {
        $width = ($height / $s_h) * $s_w;
    } else {
        $height = ($width / $s_w) * $s_h;
    }
    $newfile = imagecreatetruecolor($width, $height);
    $img = imagecreatefromgif($res);
    
    $otsc = imagecolortransparent($img);
    //如果存在透明色
    if ($otsc>=0 && $otsc < imagecolorstotal($img)){
        //查找索引颜色的值
        $tran = imagecolorsforindex($img, $otsc);
        //去除透明色的背景颜色
        $newcolor = imagecolorallocate($newfile, $tran["red"], $tran["green"], $tran["blue"]);
        imagefill($newfile, 0, 0, $newcolor);
        //将新图片的地方指定透明色
        imagecolortransparent($newfile,$newcolor);
    }
    //开始拷贝，透明色的时候用imagecopyresized才没有雪花
    imagecopyresized($newfile, $img, 0, 0, 0, 0, $width, $height, $s_w, $s_h);
    imagegif($newfile,$newname);
    imagedestroy($img);
    imagedestroy($newfile);
}
thum($filename, 100, 200, "image/thum.gif");
?>