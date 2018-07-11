<?session_start();?>
<?

$user= $_SESSION["id"]; 
$id = $_POST["id"];
$password = $_POST["password"]; 
$password2 = $_POST["password2"]; 
$conn=mysql_connect('127.0.0.1','root','ruise5566') or die("Error");
mysql_select_db('school');
if($password === $password2 and $user === $id){
$sql ="UPDATE  board  SET  password ='$password' where name='$id'";
mysql_query($sql);	
echo'修改成功，2秒後自動轉';
echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user.php>';
}else{
echo'修改失敗，3秒後自動轉';
echo'<meta http-equiv=REFRESH CONTENT=3;url=http://10.11.186.21/user.php>';
}




?>