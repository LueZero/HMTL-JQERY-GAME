<meta charset="UTF-8">
<script>
confirm("建立成功，注意的修課喔!")
</script>
 <?php

	session_start();
 	include("Connection.php");
		$id = $_SESSION["id"];
		$user = $_SESSION["names"];
	//區隔
		$teacher = $_POST['teacher'];
		$repair=$_POST['repair'];
		$cd = $_POST['cd'];
		$s = $_POST['s'];
		$credit = $_POST['credit'];
		
		date_default_timezone_set("Asia/Taipei");
		$time = date("Y:m:d:h:i:s");
	
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

			//Here you specify how many characters the returning string must have
			$nuberimg = GeraHash(30);
	
	
	
	
	
	
	
	
			for($j=0;$j<count($cd);$j++){
			
			if($s[$j]<60){
					$result = '不合格';
					
					}else{
		
					echo $result = '合格';
					}
					
						if($teacher[$j]!=null&&$cd[$j]!=null&&$repair[$j]!=null){
							$nuberimg = GeraHash(30);
							$sql = "INSERT INTO $id(`Numbering`,`teacher`,`id`,`repair`,`subject`,`score`,`credit`,`result`,`time`)VALUES('$nuberimg','$teacher[$j]','$id','$repair[$j]','$cd[$j]','$s[$j]','$credit[$j]','$result','$time')";
							mysql_query($sql);
							echo '<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/user>';
							}else{
							echo'失敗';
							echo '<meta http-equiv=REFRESH CONTENT=0;url=http://10.11.186.21/user>';
							exit;
						}
		
			}
		
	
		
	
	





?>  




















<?
/*
ob_start(); 
$out1 = ob_get_contents(); 
ob_end_clean(); 
$fp = fopen("$id.html","w"); 
fwrite($fp,$out1); 
fclose($fp); 
echo'登入完畢';
*/
?>



