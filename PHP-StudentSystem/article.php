<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:500px">
<?
session_start();
		include("php/Connection.php");	

			$id = $_SESSION["id"];
			$user = $_SESSION["names"];
			$school = $_SESSION["teacher"];
			$school = $_SESSION["school"];
			$class = $_SESSION["class"];
			
					//資料庫連結
					$article=$_GET["article"];
					$sql = "SELECT * FROM schoolcard where no = $article"; //修改成你要的 SQL 語法
					$result = mysql_query($sql,$db) or die("Error");
					$row = mysql_fetch_array ($result);
							
							$no=$row['no'];
							$names=$row['names'];
							$theme=$row['theme'];
							$content=$row['content'];
							$img=$row['img'];
							$Clickrate=$row['Clickrate'];	
							$time=$row['time'];	
				
		

$sql ="UPDATE  schoolcard  SET  Clickrate =$counter+1 where no='$article'";
mysql_query($sql);
			
?>

<div class="w3-container w3-card w3-green ">
  <h1>SCHOOLCARD</h1>
  <?echo $time?>
</div><br>
<a onclick="history.back()" ><font size="2" ><button class="w3-button w3-green">上一頁</button></font></a>
<ul class="w3-ul">
  <li>
			
	 <p>
	<h3>主題:<?echo$theme;?></h3>
	</p><img src='php/cardimg/<?echo $img?>' style='width:50%'></p>
	<p> <?echo  nl2br($content);?></p>
  </li>
  <li>
    <h3>討論區</h3>
    <p></p>
  </li>
</ul>

<div class="w3-container w3-green w3-xlarge">
  <h5>發文作者:<?echo $names?></h5>
 
</div>

</body>
</html>
