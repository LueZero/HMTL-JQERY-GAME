<!DOCTYPE html>
	<?
		
		session_start();
		include("php/Connection.php");	

			$id = $_SESSION["id"];
			$user = $_SESSION["names"];
			$school = $_SESSION["teacher"];
			$school = $_SESSION["school"];
			$class = $_SESSION["class"];
				if($id === null){
				echo'<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/index.php>';
				mysql_close($db);
				exit;
				}else{
				
				}
				
	?>
		<script>
		var oTimerId;
				function Timeout(){
				alert("\n您好\n您可能已離開!\n很抱歉!!請重新登入系統\n謝謝!!");
				location.href= ('php/logout.php');
				}
				function ReCalculate(){
				clearTimeout(oTimerId);
				oTimerId = setTimeout('Timeout()', 100*60*60); //js 是用毫秒計算
				}
				document.onmousedown = ReCalculate;
				document.onmousemove = ReCalculate;
				ReCalculate();
		</script>
<html>
  <title>School Score會員中心</title>
	<haed>
		<meta charset="UTF-8">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/list.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<sxt/javascript" src="	"></script>
		
	</haed>
		<style>
		.body{

		}
		a,table{
			text-decoration:none;
			font-family:Microsoft JhengHei;
			
		}
		.container{
				width: 300px;
				height: 30px;
				margin: 0 auto;
				margin-top: 20px;
				border:2px solid #388bfb;
				line-height: 27px;
				border-radius:10px;
				-webkit-border-radius: 10px;
				-moz-border-radius: 10px;
				overflow: hidden;
			}
		.time{
				background: #85B9FF;
				height: 100%;
				text-align: center;
				transition: all 0.5s ease-in-out;
				-webkit-transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				color: #fff;
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
		.t{
			font-size:10px;
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
		.sher{
			letter-spacing:1px;	
			text-align:center;
			font-size:9px;
		}

		
		</style>
	
		<body>
		<?
		$sql ="SELECT * FROM  img where names ='$user'"; 
		$result = mysql_query($sql,$db) or die("無法連線");
		$row = mysql_fetch_array($result);
		 $pic = $row['pic'];

		?>
		<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:4;width:280px;" id="mySidebar">
			<a href="php/userimg/<?echo $pic;?>?value=<?echo$id?>" class="w3-bar-item w3-button w3-border-bottom w3-large">
				<font size='5'></font><img  src="http:\\10.11.186.21\php\userimg\<?echo $pic;?>?value=546456>" style="width:100%;display:block; margin:auto;"></font>
			</a>

				<form name="form" method="post" action="php/Rotate.php" >
				<input type='submit' value='翻轉圖片' class="w3-button w3-light-black">
				</form>
				<a href="index.php"><font size="5">School Score</font></a> <br>
				<?
				 if($id==stu){ 
				
				?>
						<a href="administrator?value=<?echo$id?>&plsea=<?echo$user?>"><font size="5"><b>特殊管理</b></font></a> <br>
				<?}?>
				<font size='5'>
				<i class="glyphicon glyphicon-user"></i>
					<a><b>
						<?
							echo'帳號:'.$id.'<br>'; 
							echo'使用者:'.$user.'<br>'; 
							echo $school.'<br>';
							echo $class.'<br>';
							$txt = "free.php@mas.hinet.net";
						?>
					</b></a>
					</font>
					<a href =php/logout.php><font size="5" ><button class="w3-button w3-light-grey">登出</button></font></a><br>
					<a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu"   class="w3-bar-item w3-button w3-hide-large w3-large">關閉 <i class="fa fa-remove"></i></a>	
					<a href="javascript:void(0)" class="w3-bar-item w3-button w3-blue w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'" >修改資料<i class="w3-padding fa fa-pencil"></i></a>
					<a href="javascript:void(0)" class="w3-bar-item w3-button w3-gray w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id02').style.display='block'">上傳照片<i class="w3-padding fa fa-pencil"></i></a>
					<a href="javascript:void(0)" class="w3-bar-item w3-button w3-pink w3-button w3-hover-black w3-left-align " onclick="document.getElementById('id03').style.display='block'">登入成績<i class="w3-padding fa fa-pencil"></i></a>
					<a href="javascript:void(0)" class="w3-bar-item w3-button w3-green w3-button w3-hover-black w3-left-align " onclick="document.getElementById('id04').style.display='block'">發表文章<i class="w3-padding fa fa-pencil"></i></a>
				
			  <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button  w3-hover-black">系統文章<i class="fa fa-caret-down w3-margin-left"></i></a>
			
			
			 <div id="Demo1" class="w3-hide w3-animate-left">
			 <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-black" onclick="openMail('Borge');w3_close();" id="firstTab">
			  <div class="w3-container">
			  <img class="w3-round w3-margin-right" src="" style="width:15%;"><span class="w3-opacity w3-large">功能選單</span>

			  </div>
			</a>
			
			 <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');w3_close();" 	>
			  <div class="w3-container">
				<img class="w3-round w3-margin-right" src="http://a0.att.hudong.com/26/01/19300001391753132194019461913.jpg" style="width:15%;"><span class="w3-opacity w3-large">成績查詢</span>
				<p>查詢</p>
			  </div>
			</a>
			
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');w3_close();" >
			<div class="w3-container">
			<img class="w3-round w3-margin-right" src="http://2.share.photo.xuite.net/s3744430/124a0f8/19549957/1085894387_l.jpg" style="width:15%;"><span class="w3-opacity w3-large">畢業狀況</span>
				<p>新公告</p>
			  </div>
			</a>
			
			
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('ERP');w3_close();">	
			<div class="w3-container">
			<img class="w3-round w3-margin-right" src="http://www.clker.com/cliparts/0/C/G/F/s/m/plus-sign-r-hi.png" style="width:15%;"><span class="w3-opacity w3-large">新增門檻</i></span>
				<p>單開系統</p>
			</div>
			</a>
			</div>
		</nav>

		<!-- Modal that pops up when you click on "New Message" -->
		<div id="id01" class="w3-modal" style="z-index:4">
		  <div class="w3-modal-content w3-animate-zoom"  >
			<div class="w3-container w3-padding w3-blue">
			<span onclick="document.getElementById('id01').style.display='none'"class="w3-button w3-blue w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
			<h2>修改資料</h2>
			</div>
			<div class="w3-panel">	
			  <label>驗證帳號:</label>
			  <form name="form" method="post" action="php/userupdate.php" >
			  <input class="w3-input w3-border w3-margin-bottom" type="text"name='id' placeholder="請輸入你的帳號來驗證">
			  <label>修改密碼:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text"name='password' placeholder="請輸入你要修改的密碼">
			  <label>再次確認密碼:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text"name='password2' placeholder="請確認輸入你要修改的密碼">
			  <div class="w3-section">
			  <input  type='submit' class="w3-button w3-blue" value='修改送出'></a>
			  <a class="w3-button w3-light-  w3-right" onclick="document.getElementById('id01').style.display='none'">取消</a> 
			   </form>
			  </div>    
			</div>
		  </div>
		</div>



		<div id="id02" class="w3-modal" style="z-index:4">
		  <div class="w3-modal-content w3-animate-zoom">
			<div class="w3-container w3-padding w3-gray">
			   <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-gray w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
			  <h2>上傳照片</h2>
			</div>
			<div class="w3-panel">
			  <form action="php/userimg.php" method ="POST" enctype="multipart/form-data" >
			  <label>圖片上傳:</label>
			  <input type="file" name="file" id="file" />

			  <br>  
					<script>  
							var result = document.getElementById("result");  
							var file = document.getElementById("file");  
							//指定INPUT的NAME
							  function readAsDataURL()
							  {  
								var file = document.getElementById("file").files;
								var result = document.getElementById("result");  
								for(i = 0; i< file.length; i ++) {
									var reader    = new FileReader();    
									reader.readAsDataURL(file[i]);  
									reader.onload=function(e){  
										//多圖瀏覽+
										
									result.innerHTML = result.innerHTML + '<img src= ' + this.result +' width="250"" alt="" />';  
									}
								}
							 }  
					</script> 
			  <br>
			<input type="submit" neme="submit"   value="發表文章" class='button'>	
			<input type="button" value="圖片預覽" onclick="readAsDataURL()"  class='button'/>  	
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div id="result" name="result" ></div>  
			  </form>	
			  </div>    
			</div>
		  </div>
		</div>



		<div id="id03" class="w3-modal" style="z-index:4">
		  <div class="w3-modal-content w3-animate-zoom"  >
			<div class="w3-container w3-padding w3-pink">
			   <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-pink w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
			  <h2>新增</h2>
			</div>
			<div class="w3-panel">	
			   <form name="form" method="post" action="php/Score.php" >
			  <label>授課老師:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='teacher[]' placeholder="請輸入授課老師">
			   <label>必/選/通識:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='repair[]' placeholder="請輸入必/選/通識">
			  <label>科目:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='cd[]' placeholder="請輸入科目">
			  <label>成績:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='s[]' placeholder="請輸入學分">
			  <label>學分:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='credit[]' placeholder="請輸入學分">
			  <span id="text_zone">
				  <input type="hidden" name="[]" id="text_0" value='' />
			  </span>
			  <input class="w3-button w3-pink" type="button" value="增加" onclick="add_text()" />
			  <input  type='submit' class="w3-button w3-pink" value='送出'></a>
			  </form>
				<script type="text/javascript">
							var text_num=1;
							var id='text_';
							
							function add_text(){
							var text_id;
							var html='';
								for(i=1;i<text_num;i++){
							text_id=id+i;
							html+='<br><input class="w3-input w3-border w3-margin-bottom" type="hidden" placeholder=""name="teachr[]" id="text_'+i+'" value="'+document.getElementById(text_id).value+'"/>';  
							html+='授課老師:<br><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="請輸入授課老師"name="teacher[]" id="text_'+i+'" value="'+document.getElementById(text_id).value+'"/>';  
							html+='必/選/通識:<br><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="請輸入必/選/通識"name="repair[]" id="text_'+i+'" value="'+document.getElementById(text_id).value+'"/>';   
							html+='科目:<br><input class="w3-input w3-border w3-margin-bottom"	type="text" placeholder="請輸入科目"name="cd[]" id="text_'+i+'" value="'+document.getElementById(text_id).value+'"/>';   
							html+='成績:<br><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="請輸入成績"name="s[]" id="text_'+i+'" value="'+document.getElementById(text_id).value+'"/>';		
							html+='學分:<br><input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="請輸入學分"name="credit[]" id="text_'+i+'" value="'+document.getElementById(text_id).value+'"/>';	
							}
							html+='<input type="hidden" name="[]" id="text_'+text_num+'" />';
							text_num++;	
							document.getElementById('text_zone').innerHTML=html;
							}
				</script>	
			  <div class="w3-section">
			  </div>    
			</div>
		  </div>
		</div>



		
		
		
		<div id="id04" class="w3-modal" style="z-index:4">
		  <div class="w3-modal-content w3-animate-zoom"  >
			<div class="w3-container w3-padding w3-green">
			   <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-green w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
			  <h2>發表文章</h2>
			</div>
			
			<div class="w3-panel">	
			<form name="form" method="post" action="php/schoolcard.php" enctype="multipart/form-data" >
			  <label>發文主題:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='theme' placeholder="請輸入主題">
			  <label>發文內容:</label>
			  <textarea class="w3-input w3-border w3-margin-bottom" type="text" name='content' style='height:200px;' placeholder="請輸內容"></textarea>
				<input type="file" name="file" id="file" class="w3-green"/>
			  <input  type='submit' class="w3-button w3-green" value='送出'></a>
			  
			  </form>
						
			  <div class="w3-section">  </div>    
			</div>
		  </div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		








		<!-- Overlay effect when opening the side navigation on small screens -->
		<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>
		  <div class="w3-main" style="margin-left:320px;">
		  <i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
		  <a href="javascript:void(0)" class="w3-hide-large w3-blue w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'">修改<i class="fa fa-pencil"></i></a>
		  <a href="javascript:void(0)" class="w3-hide-large w3-blue w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id02').style.display='block'">上傳<i class="fa fa-pencil"></i></a>
			<a href="javascript:void(0)" class="w3-hide-large w3-blue w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id03').style.display='block'">新增<i class="fa fa-pencil"></i></a>
	




	<div id="Borge" class="w3-container person">
		   <marquee><a><font size="5">注意自己的課業狀況喔!!</font></a></marquee>
		 <br>
		  <?echo $user = $_SESSION["names"]; ?>使用者
		  <h5 class="w3-opacity"><i class="fa fa-clock-o"></i> <span style="color:red;"><b>系統公告:</b></span></h5>
		  <a><font size="5">SCHOOLCARD:</font></a>

		   
			<p>
				<?php
							//資料庫連結
					$sql = "SELECT * FROM schoolcard where no"; //修改成你要的 SQL 語法
					$result = mysql_query($sql,$db) or die("Error");
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

			
			
			<div class="container" id="container">
			<div class="time" id="bar" style="width:0%;"></div>
			 </div>  
			 <br>	 			 
			 <script>
			 function load(){
				var bar = document.getElementById("bar");
				bar.style.width = parseInt(bar.style.width) +100 +"%";
				bar.innerHTML = bar.style.width;
				if(bar.style.width == "100%"){
				window.clearTomeout(jindu);
					return;
				}
					var jindu = setTimeout("load()",100);
				}
					window.onload = function(){
					load();
				}
			 </script>	
		  </div>
		  
		  
		  
		  
		  
		  
		  
		  <div id="Jane" class="w3-container person">
			<br>
			<img class="w3-round w3-animate-top" src='php\z\<?echo $pic;?>' style="width:20%;">
			
				<h5 class="w3-opacity">畢業門檻</h5>
			<h4><i class="fa fa-clock-o"></i>
			<?
				date_default_timezone_set("Asia/Taipei");
				$time = date("h:i:s");echo$time;
			?>
			</h4>
				<p>
					<form name="form" method="post" action="php/delte.php" >
					<input type="submit"   value="修改成績" style="text-align:center" class="w3-button w3-light-blue">
					<input type="submit"   value="刪除資料" style="text-align:center" class="w3-button w3-light-blue"><br><br>
				<?php
							//資料庫連結
					$sql = "SELECT * FROM $id where no"; //修改成你要的 SQL 語法
					$result = mysql_query($sql,$db) or die("Error");
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
						echo '<TD Align=center class="t"><input type ="hidden" name="teacher" value='.$row['2'].' style="text-align: center"><a href="">'.$row['2'].'</a></TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="repair" value='.$row['4'].' style="text-align: center">'.$row['4'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="subject" value='.$row['5'].' style="text-align: center">'.$row['5'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="score"   value='.$row['6'].' style="text-align: center">'.$row['6'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="credit"   value='.$row['7'].' style="text-align: center">'.$row['7'].'</TD>';
						echo '<TD Align=center class="t"><input type ="hidden" name="credit"   value='.$row['8'].' style="text-align: center">'.$row['8'].'</TD>';
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
			
				
				</form>
				</p>
				<p></p>
		  </div>

		  
		  
		  
		  <div id="John" class="w3-container person">
			<br>
			<h5 class="w3-opacity">畢業狀況</h5>
			 <img class="w3-round w3-animate-top" src="http://img2.cgwon.com/b/img_1693757.jpg" style="width:20%;">
			<h4><i class="fa fa-clock-o"></i><?echo$time;?></h4>
			<?
			$sql = "SELECT * FROM `pass`  where name ='$id'"; //修改成你要的 SQL 語法
			$result = mysql_query($sql,$db) or die("錯誤");
			$rs = mysql_fetch_array ($result);
			$a=$rs['compulsory'];
			$b=$rs['Elective'];
			$c=$rs['generaleducation'];
			$data= mysql_query("SELECT SUM(credit) FROM $id");
			if($row!==null){
			$row = mysql_fetch_row($data);
			$total = $row[0];
			}	
			$sum = $a+$b+$c;
			$ws = $sum -$total;
			
			?>

			目前學分為:<?echo $total?>學分<br>
			畢業總學分至少為 <?echo $sum;?> 學分：<br>
			必修<?echo $a+$c;?>學分【通識 <?echo $c;?> 學分，必修 <?echo $a;?> 學分】<br>
			選修<?echo$b?> 學分【選修<?echo $b;?> 學分】<br>
			<a>
			<form name="form" method="post" action="user.php" >
			  <label><h1><a></h1></label><br>
			  <input class="w3-input w3-border w3-margin-bottom" type="hidden" name='compulsory'value='<?echo $sum;?>'>
			  <input  type='submit' class="w3-button w3-pink" value='送出'></a>
			  </form>

				<br><br>
			  <?
					$aa = $compulsory=$_POST['compulsory']; 
					$data= mysql_query("SELECT SUM(credit) FROM $id");
					if($data!=null){
					$row = mysql_fetch_row($data);	
					$total = $row[0];
					}
			
					if($aa!=null && $aa!=$total&&$total<$aa)
					{
					
					echo'<font size="5"><a>';	
					echo'你還差了';
					echo$aa-$total;
					echo'學分';
					echo'</font>';	
					}else{
					
					if($total!=null&&$aa!=null&&$aa<$total){
								
					echo'<font size="5">';	
					echo'恭喜可以畢業ㄌ!!!';
					echo'</font>';		
					}
					}
						
			  ?>
				  <script>
				  
				  if(<?echo $id!==null&&$total!==null&&$total<$sum?>){
							confirm('還差<?echo $ws;?>學分');
					
							
						
					  }
					  
				  </script>
				  <script>
				  if(<?echo$sum!==0&&$total!==null&&$total>=$sum?>){
							confirm('已經可以畢業了');
			
				  }
				  </script>
			<br>
			</a>
			<br><br>
			<a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
			<a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
			<hr>
			<p></p>
			<p></p>
		  </div>

		  
		  
		  
		  
		  
		  
		  
		  
		  
			<div id="ERP" class="w3-container person">
			<br>
			<h5 class="w3-opacity">門檻新增</h5>
			<img class="w3-round w3-animate-top" src="/w3images/avatar2.png" style="width:20%;">
			<h4><i class="fa fa-clock-o"></i><?echo $time?>.</h4>
			<a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
			<a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
			<hr>
			<p>
			<form name="form" method="post" action="php/pass.php" >
			  <label>您的帳號</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='id' placeholder="請輸入帳號">
			  <label>必修學分:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='compulsory' placeholder="請輸入必修學分">
			  <label>選修學分:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='Elective' placeholder="請輸入選修學分">
			  <label>通識學分:</label>
			  <input class="w3-input w3-border w3-margin-bottom" type="text" name='generaleducation' placeholder="請輸入通識學分">  
			  <input  type='submit' class="w3-button w3-pink" value='送出'></a>
			  </form>
			</p>
			<p></p>
		  </div>
		  
		  
		  </div>
				  <script>
						  var openInbox = document.getElementById("myBtn");
						  openInbox.click();

							function w3_open() {
							  document.getElementById("mySidebar").style.display = "block";
							  document.getElementById("myOverlay").style.display = "block";
							}
							function w3_close() {
							  document.getElementById("mySidebar").style.display = "none";
							  document.getElementById("myOverlay").style.display = "none";
							}

							function myFunc(id) {
							  var x = document.getElementById(id);
							  if (x.className.indexOf("w3-show") == -1) {
								  x.className += " w3-show"; 
								  x.previousElementSibling.className += " w3-red";
							  } else { 
								  x.className = x.className.replace(" w3-show", "");
								  x.previousElementSibling.className = 
								  x.previousElementSibling.className.replace(" w3-red", "");
								}
							 }

						  openMail("Borge")
						function openMail(personName) {
							var i;
							var x = document.getElementsByClassName("person");
							for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";
							}
							x = document.getElementsByClassName("test");
							for (i = 0; i < x.length; i++) {
							x[i].className = x[i].className.replace(" w3-light-grey", "");
							}
							document.getElementById(personName).style.display = "block";
							event.currentTarget.className += " w3-light-grey";
							}
				  </script>

				  <script>
						var openTab = document.getElementById("firstTab");
						openTab.click();
				  </script>







		  
		  
		  





		</body>
</html> 