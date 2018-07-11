<!DOCTYPE html>

<?php

		session_start();
		$id = $_SESSION["id"];
		$names = $_SESSION["names"];
		$con = mysql_connect('127.0.0.1','root','ruise5566') or die("Error");
		mysql_query("SET NAMES ='utf-8'");//編碼功能。
		mysql_select_db('school');
		$sql = "SELECT * FROM `board` where name = '$id'"; 
		$result = mysql_query($sql,$con) ;
		echo $row = mysql_fetch_array($result);   
		echo $a =  $row['name'];
?>
<?
		if($id == $a&&$id!==null){
		echo'<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/user>';
		exit;
		}else{

		}

?>
<html>
<title>POSTCARD</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5{
	font-family: "Poppins", sans-serif;
	ont-family:Microsoft JhengHei;
	}
body{
	font-size:10px;
	font-family:Microsoft JhengHei;
}
.w3-half img
{
	margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{
	opacity:1
}
.a{
	text-align:center;
}
.desc{
	text-align:center;
	font-size:100px;
}
.button{
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 2px 8px;
    border: 0px solid #1c1716;
    border-radius: 33px;
    background: #c2c2c2;
    background: -webkit-gradient(linear, left top, left bottom, from(#c2c2c2), to(#141214));
    background: -moz-linear-gradient(top, #c2c2c2, #141214);
    background: linear-gradient(to bottom, #c2c2c2, #141214);
    text-shadow: #2b120c 1px 3px 1px;
    font: normal normal bold 33px arial;
    color: #ffffff;
    text-decoration: none;
	font-family:Microsoft JhengHei;
}
.button:hover,
.button:focus{
    border: 0px solid #8c736e;
    background: #e9e9e9;
    background: -webkit-gradient(linear, left top, left bottom, from(#e9e9e9), to(#181618));
    background: -moz-linear-gradient(top, #e9e9e9, #181618);
    background: linear-gradient(to bottom, #e9e9e9, #181618);
    color: #ffffff;
    text-decoration: none;
}
.button:active{
    background: #747474;
    background: -webkit-gradient(linear, left top, left bottom, from(#747474), to(#141214));
    background: -moz-linear-gradient(top, #747474, #141214);
    background: linear-gradient(to bottom, #747474, #141214);
}
.button:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: 0px;
    left: 0px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAE50lEQVRIibWVS2xUZRTHf+e7d+ZeOp2WdtpppwU6raVMkbfQRhFTEFnoBkyMC9SAibEaNxoxbl2DwbhQDAsIBhONr0jiAh9ghBjL8BAhPDrTUminLX3RDtPpPO79XEwrD2lZeZMv3znfvTm/+z8n53zwPz/yoMPd+w42WJb3+Uwm+8mu9h2Te/d/3mYYRjibzR4C8Hq9rziOc+3t114+vufTA8Ve22rPTmW/ffeNHV33xzIfBAhWVn4YiTRt7eiIZvfsO/jxokULvyktLSk/d+78OYClSyMHxscnRoGAZduvtrSs3X358tX1wLY5Ae2HrWLQa0rLVDhcEyTqG1wd87zf1hr4szxUVcnxix+1AdTVbGHQY5S3H7balGfwsXAoyMDNeLj9sPWUhjOfbc/cfiCgZF7tL2vrXmwx0w5oKAvYOzaX7dqBW3gfeSSyt2Bp0LC5+b1j2TEbjcbw5FdtirzzW7Tnyw7oap2Jadz19ywKrNu/selNbo2aaGWhHCFSt4JEfxZXFAF/GeW+haTSFreSSZY1NJObLMbBx9Rkhkfrl9N76+/ao4diH8zEVTPGvu0ZtNZMpMboTwzguC5d8W46Y1dxXY3ruMRicWKxOK7r4rqazthVuuLdOK5Loq+fidQYWuvZa+Bqh9TUBD3X4tTU1tPXew1/WRXjI4pMpprhoQQAtjXA8NAApRWj9PUOUhceoaeni8XLG9HamR2gtYvHhvqIwfkLR1j9RC3BUIDTf1yi58YlVrU2IsDZjmNYlklDUzM+v8mFi0dobPZjzwMRd24FmXyKcCRIOBIEIOemWdEaRgARjSA83lYAadIEQ8VUhRoBcNw0ioekKJtPMdN/NwfGGOwbpXS+j1BtOUVFFkpAiyACSgvIvd2q5lKgtUsmP/mv33cjQfT3K2itMZRQ1xCkdcMSAhUlKAFXQDQgdxDGw1NUAAhQU+9nnVVNoq+X653DRKNxotGTrH4ywLK1ZRhKMJTCVF4M5cVURbh6cm5ANp8inZsgOTVA8vYwWDnCKz00riqjP+7l1C9DdPzcTyaZYf0zVRiiEdJoN03OHUfIzA7IORl6Rs8ylU/iUUIidpvO6C18fpOmZSU0r5zPggVF/PjFdc6dHCEYtFm5tgwRmS46mOre+anudvLuFFP5JIYUPpxf7iVYazM5nuPUr0Mc/aoXX5HJtpfqsLyK40cS5CYdbENhGQrbUHjmAsw0oSGCoYTqhfPY8FyIrTvD1C8upi+e4qeve6mosHlqcxXp23lOnxjBMhW2qbBMNbcCEVACSklhF2GoN00m5bB5ay11jcV0XpwgfnGc1vUVeL2KvzpG8IhgmQrLkLkVAAiCmlZx/UqS498l+P5AN+lkno3PhshnXaInhimyTRY3lTA0MEU6mcc2CirmVDCjQqabRyFMjGVJJ/OYhlAZtCkpNbnRnUIB1aF5OHnNxEgWy1R4DYVxH+A/N5pMq0CgfqmfF15vwF9s4i/1IAI732pC3EIaN22pprUlQN1CH5Yh5HVB+awAj7LxecsxlcYyBK+pKAkLXkNNL2HBosLuMRS+gKKmsmArBYZWIDdnB6Rzox0eY0mLZXrwKME0Cp0qImgERwt5XZgRM35OCYYjiAhZJ0f32GDHrIBUZujp830/rJF7aqO5M84K9sylInKfXRhPZ+6O+Q94Uu9N6DlspAAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
	
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:280px;font-weight:bold;" id="mySidebar"><br><br><br>
		<script language="JavaScript">
		var now,hours,minutes,seconds,timeValue;
		function showtime(){
		now = new Date();
		hours = now.getHours();
		minutes = now.getMinutes();
		seconds = now.getSeconds();
		timeValue = (hours >= 12) ? "下午 " : "上午 ";
		timeValue += ((hours > 12) ? hours - 12 : hours) + " 點";
		timeValue += ((minutes < 10) ? " 0" : " ") + minutes + " 分";
		timeValue += ((seconds < 10) ? " 0" : " ") + seconds + " 秒";
		clock.innerHTML = timeValue;
		setTimeout("showtime()",1000);
		}
		showtime();
		</script>
<body onload="showtime();" >
&nbsp;&nbsp;&nbsp;<span id='clock'></span><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:30px">關閉</a>
  <div class="w3-container">
    <h3 class="w3-padding-50"><b><a href='index' style="text-decoration:none;"	>POSTCARD</a><br></b></h3>
  </div>
  <div class="w3-bar-block">
  
    <a href="index" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">申辦帳號</a> 
    <a href="index" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">我的會員</a> 
    <a href="user" class="w3-bar-item w3-button w3-hover-white">
	<?echo $_SESSION["names"].'使用者'; $a =  $row['names'];?>
    </a>
	<a href="php/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">登出</a> 
	<a class="w3-bar-item w3-button w3-hover-white">
	<?php
		$counter = intval(file_get_contents("counter.dat")) + 1;
		$fp = fopen("counter.dat", "w");
		fwrite($fp, $counter);
		fclose($fp);
		echo "目前總覽次數: " . $counter;	
	?>
    </a>
	 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span><a href='index.php' style="text-decoration:none;">POSTCARD</a></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>歡迎各位</b></h1>
    <h1 class="w3-xxxlarge w3-text-blue"><b>申請帳號<b></h1><br>

	<form name="form" method="post" action="php/inster"onsubmit="return chk()">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<font size="3">申請帳號：<input type="text" placeholder="請輸入你要的帳號" name="id"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">申請密碼：<input  type="password" placeholder="請輸入你要的密碼"name="password"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">申請姓名：<input  type="text" placeholder="您的性名"name="names"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">申請信箱：<input  type="text" placeholder="您的信箱"name="email"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">手機電話：<input  type="text" placeholder="您的手機電話"name="telphone"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">班級導師：<input  type="text" placeholder="您的班導"name="teacher"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">您的學校：<input  type="text" placeholder="您的學校"name="school"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<font size="3">您的班級：<input  type="text" placeholder="您的班級"name="class"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
<br><input type="submit" name="button" value="送出申請"  class='button'><br>
</form>	
		<script type="text/javascript">
		  function chk(){
			if(document.form.id.value==''){
			  alert('帳號未填');
			  document.form.id.focus();
			  return false;
			}
			if(document.form.password.value==''){
			  alert('密碼未填');
			  document.form.password.focus();
			  return false;
			}
			return true;
		  }
		 </script>
  </div>
  <br>
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding"></div>
		<form name="form" method="post" action="php/online" onsubmit="return chk()">
		<meta http-equiv="Content-Type" content="text/html/php; charset=utf-8" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="3">登入帳號：<input type="text" placeholder="請輸入你要的帳號" name="idd"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="3">登入密碼：<input  type="password" placeholder="請輸入你要的密碼"name="passwordd"style="height:40px;width:50%" onfocus="func(this)" AutoComplete="Off"></font>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input type="submit" name="button" value="登入" class='button' >
		</form> 
  <div class="w3-half"></div>
  </div>


			<script>
			// Script to open and close sidebar
			function w3_open() {
				document.getElementById("mySidebar").style.display = "block";
				document.getElementById("myOverlay").style.display = "block";
			}
			 
			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
				document.getElementById("myOverlay").style.display = "none";
			}

			// Modal Image Gallery
			function onClick(element) {
			  document.getElementById("img01").src = element.src;
			  document.getElementById("modal01").style.display = "block";
			  var captionText = document.getElementById("caption");
			  captionText.innerHTML = element.alt;
			}
			</script>

</body>
</html>
