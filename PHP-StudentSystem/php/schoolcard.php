<?
session_start();
include("Connection.php");
		$id = $_SESSION["id"];
		$user = $_SESSION["names"];
		$theme = $_POST["theme"];
		$content = $_POST["content"];

function GeraHash($qtd){
			//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
			$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
			$QuantidadeCaracteres = strlen($Caracteres);
			$QuantidadeCaracteres--;

			$Hash=NULL;
				for($x=21;$x<=$qtd;$x++){
					$Posicao = rand(0,$QuantidadeCaracteres);
					$Hash .= substr($Caracteres,$Posicao,1);
				}

			return $Hash;
			}
		$nuberimg = GeraHash(30);
date_default_timezone_set("Asia/Taipei");
		$time = date("Y:m:d:h:i:s");
		$img = $_FILES['file']['name'];
		if($theme!=null&&$content!=null){
		move_uploaded_file($_FILES['file']['tmp_name'],'cardimg/'.$_FILES['file']['name']);
		$sql = "INSERT INTO schoolcard(`names`,`theme`,`content`,`Numbering`,`time`,`img`,`id`)VALUES('$user','$theme','$content','$nuberimg','$time','$img','$id')";
		mysql_query($sql);
		echo'發表成功';	
		echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user>';
		}else{
		echo'發表失敗';	
		echo'<meta http-equiv=REFRESH CONTENT=2;url=http://10.11.186.21/user>';
			
		}

?>