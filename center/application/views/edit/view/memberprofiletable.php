<?php

    error_reporting(0);
	$id =  $_GET['value'];
	$query = $this->db->query("SELECT * FROM employeeinformation where employeeid='$id'");
	$con = $this->db->affected_rows();	
	for ($a=0;$a<$con;$a++){
	$row = $query->unbuffered_row();
	$row->employeeid;
	}

?>


 <table width="800" border="10" align="center" cellpadding="10" cellspacing="0" style="font-family:Microsoft JhengHei;font-size:25px;">  
        <caption><h3><?php echo $row->name;?>基本資料</h3></caption>  
        <tr>  
            <td colspan="3" style="background-color:#9FCDEA;">員工基本资料</td>  
        </tr>  
        <tr>  
            <td>姓名：<?php echo $row->name;?></td>  
            <td>性別：<?php echo $row->gender;?></td>  
           
        </tr>  
        <tr>  
            <td>出生：<?php echo $row->birthtime;?></td>  
            <td>身分證：<?php echo $row->identity;?></td>  
        </tr>  
        <tr>  
            <td>信箱：<?php echo $row->email;?></td>  
          	<td>居住地：<?php echo $row->address;?></td>  
        </tr>  
        <tr>  
           
     		<td>電話：<?php echo $row->telphone;?></td>  
			<td>電話2：<?php echo $row->telphonetwo;?></td>   
        </tr>  
        <tr>  
        	<td colspan="3">學歷：<?php echo $row->maxschool;?></td> 
        </tr>  
        <tr>  
            <td colspan="3" bgcolor="#9FCDEA">到職日期</td>  
        </tr>  
        <tr>  
            <td colspan="3"><?php echo $row->workingday;?></td>  
        </tr>  
        <tr>  
            <td colspan="3" bgcolor="#9FCDEA">專長</td>  
        </tr>  
        <tr>  
            <td colspan="3"><?php echo $row->expertise?></td>  
        </tr>  
        <tr>  
            <td colspan="3" bgcolor="#9FCDEA">證照</td>  
        </tr>  
        <tr>  
            <td colspan="3"><?php echo $row->language?></td>  
        </tr>  
    </table>  