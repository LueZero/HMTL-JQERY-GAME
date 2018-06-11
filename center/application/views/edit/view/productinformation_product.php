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


<?php 
error_reporting(0);
$value = $_GET['value'];


$query = $this->db->query("SELECT * FROM business_commodity where commodity_id = '$value'");


if ($query->num_rows() > 0){
        $row = $query->row();

     
      


?>






<table class="table">

<thead>
<tr>

<th scope="col">產品名稱</th>
<th scope="col">產品內容</th>
<th scope="col">產品價格</th>
<th scope="col">產品單位</th>
	<th><a   href='./Setproductinformation?value=deleteproduct&comid=<?php echo $row->commodity_id;?> '>刪除商品</a></th>

</tr>
</thead>
<tbody> 

<tr>
<form method="post" action="./Setproductinformation?value=updateproduct&comid=<?php echo $row->commodity_id;?>"   >
<td><input type="text" 	  class="form-control"  name="productname" value='<?php echo $row->commodity_name;?>'> </td>
<td><textarea class="form-control" name="productcontent" value=''><?php  echo $row->commodity_content;?></textarea> </td>

<td><input type="text" 	  class="form-control"  name="productprice" value="<?php  echo $row->commodity_price;?>"> </td>
<td><input type="text"	  class="form-control"  name="productunit" value="<?php  echo $row->commodity_unit;?>"></td>
</tbody>
<tbody> 
<tr>
<th scope="col">產品數量</th>
<th scope="col">產品尺寸</th>
<th scope="col">關鍵字1</th>
<th scope="col">關鍵字2</th>
</tr>
<td><input type="text"    class="form-control" name="productquantity" value="<?php  echo $row->commodity_quantity;?>"></td>
<td><input type="text"	  class="form-control" name="productsize"     value="<?php  echo $row->commodity_size;?>"> </td>
<td><input type="text" 	  class="form-control" name="productkeyword"  value="<?php  echo $row->commodity_keywords; ?>"> </td>  
<td><input type="text"	  class="form-control" name="productkeywordtwo" value="<?php  echo $row->commodity_keywordstwo; ?>"> 
</td>
</tbody>

<tbody> 

<th scope="col">產品分類</th>
<th scope="col"><?php echo $row->commodity_classification;?></th>
<th scope="col">
<select class="selectpicker" name="class">
<?php
$query = $this->db->query("SELECT * FROM business_classification");
foreach ($query->result() as $row){    
?>
<?php echo '<option>'.$row->classification_title.'<option>';?>
<?php } ?>
</select>
</th>

</tbody>


<td><input type="submit"  class="form-control" value="儲存"></td>






<td>
<button type="button" class="btn ">
<a href="http://10.11.186.21/center/index.php/Company/Web/productinformation" style="color:black">上一頁</a>
</button>
</td>   


</tr>
<?php

 }else{

 	echo "<script>alert('無資料	')</script>";

} ?>

</table>
</form>
</body >