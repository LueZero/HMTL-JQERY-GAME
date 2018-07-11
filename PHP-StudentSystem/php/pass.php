<?
session_start();
include("Connection.php");	
 $id = $_SESSION["id"];
 $user = $_SESSION["names"];
	date_default_timezone_set("Asia/Taipei");
		$time = date("Y:m:d:h:i:s");
if($id!=null){
$sql = "DELETE FROM pass WHERE name='$id'";
 mysql_query($sql);
}
 echo	$id = $_POST['id'];
 echo	$compulsory = $_POST['compulsory'];
 echo	$Elective = $_POST['Elective'];
 echo	$generaleducation = $_POST['generaleducation'];
  $sql = "INSERT INTO pass (`name`,`compulsory`,`Elective`,`generaleducation`,`time`)VALUES('$id','$compulsory','$Elective','$generaleducation','$time')";
 mysql_query($sql);
 echo'<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/user.php>';
?>