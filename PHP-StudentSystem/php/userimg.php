<?
session_start();
include("Connection.php");
$id = $_SESSION["id"];
$user = $_SESSION["names"];
if($id == null)
{
echo'滾';
exit;
}else{

}


date_default_timezone_set("Asia/Taipei");
 $time = date("h:i:s");
$a = $_FILES['file']['name'];
$sql ="DELETE FROM img WHERE names='$user'";
$result = mysql_query($sql, $db); 
if($a!==null&& $id!==null)
{
move_uploaded_file($_FILES['file']['tmp_name'],'userimg/'.$_FILES['file']['name']);//複製檔案
$sql= "INSERT INTO img(`id`,`names`,`pic`,`time`)VALUES('$id','$user','$a','$time')";
$result = mysql_query($sql,$db); //送出發言到數據庫
echo'上傳成功';
echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user>';
}else{
echo'上傳失敗';
echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user>';
}

?><br>








<?php
	function getMicrotime()
	{
		//microtime會回傳微秒及秒(msec sec)
		$arr = explode(" ",microtime());
		return $arr[0] + $arr[1];
	}
	
	//紀錄開始時間
	$start = getMicrotime();
	
	$str = "";
	for( $i = 0; $i <= 1000000 ; $i++) $str .= "Hello";
	//結束時間
	$end = getMicrotime();
	
	echo "程式執行了 " . ($end - $start) . "秒";
?>
