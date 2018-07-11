<?php
session_start();

		include("Connection.php");
		//
		//
		$id=$_POST["id"];
		$standard_E = "/^([0-9A-Za-z]+)$/";
		$standard_D = "/^([A-Za-z]+)$/";
		if(preg_match($standard_E,$id)) {
            echo "";
        } else {
            echo "帳號格式錯誤";
			echo'<meta http-equiv=REFRESH CONTENT=1;url=http://10.11.186.21/index>';
			exit;
        }
				$sql = "CREATE TABLE $id (no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				Numbering VARCHAR(10) NOT NULL,
				teacher VARCHAR(30) NOT NULL,
				id VARCHAR(30) NOT NULL,
				repair VARCHAR(50),
				subject VARCHAR(50),
				score VARCHAR(50),
				credit VARCHAR(50),
				result VARCHAR(50),
				time TIMESTAMP)";
		  mysql_query($sql);
          $password=$_POST["password"];
		  $names=$_POST["names"];  
          $email=$_POST["email"];
		  $telphone=$_POST['telphone'];
          $teacher=$_POST["teacher"];
		  $school=$_POST["school"];  
          $class=$_POST["class"];
		 //
		//時間
		date_default_timezone_set("Asia/Taipei");
		$time = date("h:i:s");
		//
		if($id == $idnuber){
		echo"帳號已經有了無法註冊";
		echo '<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/index.php>';
		exit;
			}
		if ($id !==null && $password!== null){
			  	$sql = "INSERT INTO board (`name`,`password`,`names`,`email`,`telphone`,`teacher`,`school`,`class`,
							`time`)VALUES('$id','$password','$names','$email','$telphone','$teacher','$school','$class','$time')";
				$result = mysql_query($sql);
				$_SESSION['name'] = $names;
				$_SESSION['id'] = $id;
				echo"申辦成功，三秒後自動轉入登入首頁";
				echo'<meta http-equiv=REFRESH CONTENT=1;url=http://10.11.186.21/user>';	
				} else {
				die ("申辦失敗，三秒後自動轉入登入首頁"). "<br>" ;
				echo'<meta http-equiv=REFRESH CONTENT=1;url=http://10.11.186.21/index>';
				exit;
			}
		//	

?>

