<?php
	session_start();

//↑ 加入資料庫連線PHP檔案Connection.php。
		$id = $_POST["idd"];
		$password = $_POST["passwordd"];	

			$hash_string = 'zero';

			$hash = hash('SHA384', $hash_string, true);
			$app_cc_aes_key = substr($hash, 0, 32);
			$app_cc_aes_iv = substr($hash, 32, 16);
	
			$data = $password;

			$padding = 16 - (strlen($data) % 16);
			$data .= str_repeat(chr($padding), $padding);
			$encrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128,$app_cc_aes_key, $data, MCRYPT_MODE_CBC, $app_cc_aes_iv);
			$encrypt_text = base64_encode($encrypt);
			//↑寫入資料庫
			//↓解密比對
			$data = mcrypt_decrypt(MCRYPT_RIJNDAEL_128,$app_cc_aes_key, $encrypt, MCRYPT_MODE_CBC, $app_cc_aes_iv);
			$padding = ord($data[strlen($data) - 1]);
			$pw	= substr($data, 0, -$padding);
		/*↓加密
		password_hash($pw, PASSWORD_BCRYPT)."\n";		
		*/		
		function online($i,$p){
				include("Connection.php");
				//↑ 指定網頁物件轉PHP格式語法。
				 $sql = "SELECT * FROM board where password ='$p' and name = '$i'"; 
				//↑指定選擇資料庫資料欄位。
				$result = mysql_query($sql,$db);
				//↑函數指定發送給資料庫。		
				$row = mysql_fetch_row($result);
				$user = $row['0']; 
				$names = $row['2']; 
				$email = $row['3']; 
				$telphone = $row['4']; 
				$teacher = $row['5']; 
				$school = $row['6']; 
				$class = $row['7'];
				//↑接收傳回來資料來做辯證。	
				
								if($row[0] == $i && $row[1] == $p&&$i!=null){
								$_SESSION['id'] = $user;
								echo$_SESSION['names'] = $names;
								echo'使用者';
								$_SESSION['email'] = $email;
								$_SESSION['school'] = $school;
								$_SESSION['teacher'] = $teacher;
								$_SESSION['class'] = $class;
								header("Location: http://10.11.186.21/user"); 
								}else{
								echo '登入失敗!';     
								header("Location: http://10.11.186.21/index"); 
								}
		}
		online($id,$pw);
?>




