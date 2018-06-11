<!DOCTYPE HTML>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<link rel="stylesheet" href="/center/css/bootstrap.css">
<link rel="stylesheet" href="/center/css/bootstrap-grid.css">
<link rel="stylesheet" href="/center/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="/center/css/bootstrap-reboot.css">
<link rel="stylesheet" href="/center/css/bootstrap-reboot.min.css">


</head>
<body style="font-family:Microsoft JhengHei;">








<table class="table">
<thead>
<tr>
<th scope="col">編號</th>
<th scope="col">帳號</th>
<th scope="col">姓名</th>
<th scope="col">密碼</th>






</tr>
</thead>
<tbody> 
<?php 
error_reporting(0);
$id =  $_GET['value'];
$query = $this->db->query("SELECT * FROM customer_users where customer_id = '$id'");
$con = $this->db->affected_rows();	
for ($a=0;$a<$con;$a++){
$row = $query->unbuffered_row();
?>
<tr>
<form action="./Setuserfile?value=update_users&key=<?php  echo $row->customer_id; ?>"   method="post">
<td><?php   echo  $row->no; ?></td>
<td><input type="text" name="userid"   		value=<?php   echo  $row->customer_id; ?>      	class="form-control" > </td>
<td><input type="text" name="username" 		value=<?php   echo  $row->customer_name; ?>    	class="form-control" > </td>
<td><input type="text" name="userpw" 		value=<?php   echo  $row->customer_password; ?> 	class="form-control"  > </td>
</tbody>
<tr>
<th></th>	
<th scope="col">信箱</th>
<th scope="col">手機</th>
<th scope="col">地址</th>	
</tr>
<tbody> 
<td></td>
<td><input type="text" name="useremail" 	value=<?php   echo  $row->customer_email; ?>     class="form-control" > </td>
<td><input type="text" name="usertel" 		value=<?php   echo  $row->customer_tel; ?>       class="form-control" > </td>
<td><input type="text" name="useraddress"	value=<?php   echo  $row->customer_address; ?>   class="form-control" > </td>  
</tbody>


<td><input type="submit"  class="form-control" value="儲存"></td>          
<td> <button type="button" class="btn "><a href="http://10.11.186.21/center/index.php/Company/Web/productinformation" style="color:black">上一頁</a></button></td>   
</tr>
<?php } ?> 

</table>
</form>
</body >