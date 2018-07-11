<?
session_start();
include("Connection.php");
    $id = $_SESSION["id"];
	$user = $_SESSION["names"];
if($id==null){
	echo'滾';
	echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user.php>';
	exit;
}

	
	$no = $_POST['no']; 
	if($no!==null){
	$sqll = "DELETE FROM $id WHERE no='$no'";
    mysql_query($sqll);
	echo'刪除完畢';
	echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user.php>';
	exit;
	}else{
	echo'滾';
	echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user.php>';
	exit;
		
	}
	
?>