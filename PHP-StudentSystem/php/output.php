<?php
include("php/Connection.php");	

if ($_GET['action'] == 'excel') {
    header('Content-type:application/vnd.ms-excel');  //宣告網頁格式
    header('Content-Disposition: attachment; filename=test.html');  //設定檔案名稱
	 header("Pragma:no-cache");
	   header("Expires:0");
}
else {
    $html_button = '<form action=""><input type="submit" name="action" value="excel"></form>';
}
ini_set("memory_limit", "1020M"); 

?>
<html>
    <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <?=$html_button?>
     <?     
		echo $class ;
		echo '<table width="100%" border="1" cellpadding="0" cellspacing="0">';
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
		$data=mysql_query("SELECT * FROM stu ORDER BY no ASC");
		for($j=0;$j<mysql_num_rows($data);$j++) {
	
        $rs=mysql_fetch_row($data);
		echo '<TR>';
		echo '<TD Align=center class="t"><input type ="radio" name="no" value='.$rs['0'].' style="text-align: left">'.$rs['0'].'</TD>';
		echo '<TD Align=center class="t"><input type ="hidden" name="teacher" value='.$rs['1'].' style="text-align: center">'.$rs['1'].'</TD>';
		echo '<TD Align=center class="t"><input type ="hidden" name="repair" value='.$rs['3'].' style="text-align: center">'.$rs['3'].'</TD>';
		echo '<TD Align=center class="t"><input type ="hidden" name="subject" value='.$rs['4'].' style="text-align: center">'.$rs['4'].'</TD>';
		echo '<TD Align=center class="t"><input type ="hidden" name="score"   value='.$rs['5'].' style="text-align: center">'.$rs['5'].'</TD>';
		echo '<TD Align=center class="t"><input type ="hidden" name="credit"   value='.$rs['6'].' style="text-align: center">'.$rs['6'].'</TD>';
		echo '<TD Align=center class="t"><input type ="hidden" name="credit"   value='.$rs['6'].' style="text-align: center"></TD>';
		echo '</TR>';	

		}

		echo '</table>';	

		?>
    </body>
</html>