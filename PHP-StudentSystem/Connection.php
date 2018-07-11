<?php
$db_server = "127.0.0.1";//1.連接資料庫的位子。
$db_user = "root";//2.Apache帳號，基本上都是預設root。
$db_passwd = "ruise5566";//3.Apache密碼，你在安裝Apache軟體設定密碼。
$db_name = "school";//4.Apache資料庫的名稱
$db =mysql_connect($db_server, $db_user, $db_passwd, $db_name);//把1～4做一次包一起為$db。
//mysql_connect資料庫連結函數。
//基本上面資料一定要打對，不然無法連接資料庫。

if($db)
//用if假設上面資料是有質，如果有就是連線成功，所以我才用mysql_connect，定義$db。
//你一定覺得哪裡是判斷式，if(True)只要有數質就是代表成功意思，但這個判斷很簡單，沒有認真去寫，只有有數質給他都是成功的喔。
{
echo"";//連線成功
//印出功能。         
}else{
echo "無法連線!";//
//印出函數功能。
}
	
	
mysql_query("SET NAMES ='utf-8'");//編碼功能。
 
$seldb = mysql_select_db("school", $db);//選擇資料庫。


if($seldb)
//假設判斷資料庫選擇有沒有成功。
{
     
}else{

	}
?>	