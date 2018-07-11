<meta http-equiv="refresh" content="1">
<?session_start();?>
<?php
 $id = $_SESSION["id"];
 $user = $_SESSION["names"];
 if($id!==null)
{
}else{
echo'<meta http-equiv=REFRESH CONTENT=0;url=user>';
exit;
}
$con = mysql_connect('127.0.0.1','root','ruise5566') or die("Error");
mysql_select_db('school');
$sqll ="SELECT * FROM  img where names ='$user'"; 
$resultt = mysql_query($sqll,$con) or die("錯誤");
$row = mysql_fetch_array($resultt);
//您的圖像, 或者您的使用者用於旋轉的圖像。
$image =  'userimg/'.$row['pic'];
//旋轉90度
$degrees =90;
$source = imagecreatefromjpeg($image);
//旋轉圖像
$rotate = imagerotate($source, $degrees,0);

//輸出新的jpg格式圖像，您也可以根據需要改變成gif或者png等格式
 echo imagejpeg($rotate,$image);

echo'<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/user.php>';
echo'翻轉成功';	
exit;
?>
