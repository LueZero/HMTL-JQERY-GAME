<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-tw">
<title>管理系統</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
</head>
<style>
h1{
	font-family:Microsoft JhengHei;
	font-size:60px;
}
.teacher{
			background: #00BBFF
		}
		tr:nth-child(even) {
			background: #CCC
		}
		tr:nth-child(odd) {
			background-color: #FAFAFA;
			
		}
	
		.lo{
			width:100%;
			text-align:center;
			font-size:10px;
			letter-spacing:3px;
			position: relative;
			top: 0px;
			left: -20px;

		}
		.sher
		{
			letter-spacing:1px;	
			text-align:center;
			font-size:10px;
			
		}
	

</style>
<body style="">

	<?
			include("php/Connection.php");	
			session_start();
		
			$id = $_SESSION["id"];
			$user = $_SESSION["names"];
			$teacher= $_SESSION["teacher"];
			$school = $_SESSION["school"];
			$class = $_SESSION["class"];
			$value=$_GET['value'];
			$plsea=$_GET['plsea'];
				if($user !=null ){
			
			
				}else{
				echo'無法使用';
				exit;	
				}
	?>
	
<header class="w3-container w3-blue">
  <h1>管理中心</h1>
</header><br>
	<a href =user><font size="5" ><button class="w3-button w3-light-grey">上一頁</button></font></a>
	<a href =php/logout><font size="5" ><button class="w3-button w3-light-grey">請習慣登出</button></font></a><br><br>
<div class="w3-container w3-half w3-margin-top">

		<form class="w3-container w3-card-4" name="form" method="post" action="php/sle" >
		<label>管理中心</label><br>
				<?php
					
					$sql = "SELECT * FROM board "; //修改成你要的 SQL 語法
					$result = mysql_query($sql,$db) or die("Error");
					$data_nums = mysql_num_rows($result);
					for($j=0;$j<$data_nums;$j++){
					 $row = mysql_fetch_array($result);
					echo $row[0];
				?>
					<input class="w3-radio" type="radio" style="width:10%" value='<? echo $row[0];?>' name="YourLocation"  required>
				<?php
					}
				?>
					<br>
					<button class="w3-button w3-section w3-blue w3-ripple">請選擇資料 </button>
				<?
					$ad = 'stu';
					$ad = $_SESSION['ad'];
				?>
					<br>
		</form>

<br>
		<form class="w3-container w3-card-4" name="form" method="post" action="administrator.php?value=<?echo$id?>&search=<?echo$user;?>" >
		<p>
		<label></label>
		<input class="w3-input" type="hidden" style="width:90%" value='<?echo $id?>' required>
		</p>
		<p>
		<label>輸入要檢查的資料</label>
		<input class="w3-input" type="text" style="width:90%" name='name' required>
		</p>
		<button class="w3-button w3-section w3-blue w3-ripple">搜尋 </button>
		</form>
		<br>











		<form class="w3-container w3-card-4" name="form" method="post" action="administrator" >
		<p>
		<label>修改分數</label></p>
		<input class="w3-input" type="text" name="score" value="" required>
		<p>
		<label>修改狀態</label>
		<input class="w3-input" type="text" name="result" value=""required>
		</p>
		<p>
		<label>修改科目	</label>
		<input class="w3-input" type="text" name="subject" value=""required>
		</p>
		<p>
		<input id="milk" class="w3-check" type="hidden" checked="checked">
		</p>
		<p>
		<button class="w3-button w3-section w3-blue  w3-ripple">修改</button></p>
		<?
		
		
		$score = $_POST['score'];
		$result = $_POST['result'];
		$subject = $_POST['subject'];
		$no = $_POST['no'];	
		if($no!==null){
			$sql ="UPDATE  $ad  SET  score ='$score',result='$result',subject='$subject' where no='$no'";
			mysql_query($sql);	
			echo'修改成功';
			}else{
			if(mysql_query($sql)!=1){
				echo'';
			}
			}
			
		?>
		
		

</div>
<div class="w3-container w3-half w3-margin-top">
<?php

					
					$a =$_POST['name'];
				
				    $sql = "SELECT * FROM  	$ad  where teacher like '%$a%'  or result  like '%$a%' or no  like '%$a%'"; //修改成你要的 SQL 語法
					$result = mysql_query($sql,$db) or die("選擇你要的資料");
					$data_nums = mysql_num_rows($result); //統計總比數
					$per = 8; //每頁顯示項目數量
					$pages = ceil($data_nums/$per); //取得不小於值的下一個整數
						if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
							$page=1; //則在此設定起始頁數
						} else {
							$page = intval($_GET["page"]); //確認頁數只能夠是數值資料
						}
					$start = ($page-1)*$per; //每一頁開始的資料序號
					$result = mysql_query($sql.' LIMIT '.$start.', '.$per,$db) or die("Error");
						
						echo '<table width="100%" border="0" cellpadding="0" cellspacing="3">';
						echo '<TR>';
						echo '<TD Align=center class="teacher">編號</TD>';
						echo '<TD Align=center class="teacher">授課老師</TD>';
						echo '<TD Align=center class="teacher">必/選/通識</TD>';
						echo '<TD Align=center class="teacher">科目</TD>';
						echo '<TD Align=center class="teacher">分數</TD>';
						echo '<TD Align=center class="teacher">學分</TD>';
						echo '<TD Align=center class="teacher">狀況</TD>';
						echo '</TR>';
						echo '<tr>';
						//輸出資料內容
						while ($row = mysql_fetch_array ($result))
							
						{
							$no=$row['no'];
							$Numbering=$row['Numbering'];
							$teacher=$row['teacher'];
							$repair=$row['repair'];
							
						echo '<TR>';
						echo '<TD Align=center class="t"><input type ="radio" name="no" value='.$row['0'].' style="text-align: left">'.$row['no'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="" value='.$row['2'].' style="text-align: center"><a style="text-decoration:none;">'.$row['2'].'</a></TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="" value='.$row['4'].' style="text-align: center">'.$row['4'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="" value='.$row['5'].' style="text-align: center">'.$row['5'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name=""   value='.$row['6'].' style="text-align: center">'.$row['6'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name=""   value='.$row['7'].' style="text-align: center">'.$row['7'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name=""   value='.$row['8'].' style="text-align: center">'.$row['8'].'</TD>';
						echo '</TR>';	
						
						
						
						}
						echo'</table>';
						echo '<br>';
						s?>
					<ul class="lo">
						<?php
						//分頁頁碼
						echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
						?>
					</ul>
					<div class="sher">
						<?
						echo "<br /><a href=?page=1>首頁</a> ";
						echo "第 ";
						for( $i=1 ; $i<=$pages ; $i++ ) {
							if ( $page-2 < $i && $i < $page+8 ) {
								echo"<a href=?page=".$i.">".$i."</a> ";
							}
						} 
						echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
						?>
					</div>
			</p>		
						
						
						
						

			<p>
				<?php
							//資料庫連結
					$sql = "SELECT * FROM schoolcard  where no like '%$a%' or names like '%$a%'"; //修改成你要的 SQL 語法
					$result = mysql_query($sql,$db) or die("Error")	;
					$data_nums = mysql_num_rows($result); //統計總比數
					$per = 20; //每頁顯示項目數量
					$pages = ceil($data_nums/$per); //取得不小於值的下一個整數
						if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
							$page=1; //則在此設定起始頁數
						} else {
							$page = intval($_GET["page"]); //確認頁數只能夠是數值資料
						}
					$start = ($page-1)*$per; //每一頁開始的資料序號
					$result = mysql_query($sql.' LIMIT '.$start.', '.$per,$db) or die("Error");
				
						echo '<table width="100%" border="0" cellpadding="0" cellspacing="1">';
						echo '<TR>';
						echo '<TD Align=center class="teacher">編號</TD>';
						echo '<TD Align=center class="teacher">發文者</TD>';				
						echo '<TD Align=center class="teacher">文章主題</TD>';					
						echo '<TD Align=center class="teacher">點擊率</TD>';
						echo '</TR>';
						echo '<tr>';
						//輸出資料內容
						while ($row = mysql_fetch_array ($result))
						{
							$no=$row['no'];
							$theme=$row['theme'];
							$Clickrate=$row['Clickrate'];
						echo '<TR>';
						echo '<TD Align=center class="t"><a href="article?value=schoolcard&article='.$row['no'].'">'.$row['no'].'</a></TD>';
						echo '<TD Align=center class="t"><a href="article?value=schoolcard&article='.$row['no'].'">'.$row['names'].'</a></TD>';
						echo '<TD Align=center class="t"><a href="article?value=schoolcard&article='.$row['no'].'">'.$row['theme'].'</a></TD>';
						echo '<TD Align=center class="t">'.$row['Clickrate'].'</TD>';
						echo '</TR>';	
						}
						echo'</table>';
					?>
			<br/>
				<ul class="lo">
				
						<?php
						//分頁頁碼
						echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
						?>
						</ul>
						<div class="sher">
						<?
						echo "<br /><a href=?page=1>首頁</a> ";
						echo "第 ";
						for( $i=1 ; $i<=$pages ; $i++ ) {
							if ( $page-2 < $i && $i < $page+8 ) {
								echo"<a href=?page=".$i.">".$i."</a> ";
							}
						} 
						echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
						?>
						</div>
							
			</p>	
			
			
			
			</form>
</div>
					
					
					
					
					
					
					
</div>
</body>
</html> 
