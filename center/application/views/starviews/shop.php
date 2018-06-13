<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed'); 
$this->load->database();  


$id = base64_decode( $_COOKIE["customer_id"] ) ;


if(  empty( $id ) ){

echo '<script>alert("請先登入會員/無會員到會員專區註冊")</script>';
echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 
return;

}




if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" , $id  )   ){ 
          
echo'<script>alert("請勿使用特殊符號")</script>';
 echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 
$this->db->close();
return;
}





?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/center/css/Bootstrapv3.3.7/Bootstrapv3.3.7.css">
<!--<link rel="stylesheet" href="/center/css/bootstrap.css">-->
<link rel="stylesheet" href="/center/css/bootstrap-grid.css">
<link rel="stylesheet" href="/center/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="/center/css/bootstrap-reboot.css">
<link rel="stylesheet" href="/center/css/bootstrap-reboot.min.css">
<script src="/center/js/JQERY/jquery3.3.1.min.js"></script>
<script src="/center/js/bootstrap3.3.7.min.js"></script>
<script src="/center/js/bootstrap.bundle.js"></script>
<script src="/center/js/bootstrap.bundle.min.js"></script>
<script src="/center/js/bootstrap.js"></script>
<script src="/center/js/bootstrap.min.js"></script>
<script src="/center/js/bootstrap3.3.7.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style type="text/css">
body,h1,h2{
  font-family:Microsoft JhengHei;
}





.insw{
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 9px 15px;
    border: 0px solid #a12727;
    border-radius: 25px;
    background: #ff4a4a;
    background: -webkit-gradient(linear, left top, left bottom, from(#ff4a4a), to(#992727));
    background: -moz-linear-gradient(top, #ff4a4a, #992727);
    background: linear-gradient(to bottom, #ff4a4a, #992727);
    text-shadow: #591717 1px 1px 1px;
    font: normal normal bold 28px georgia;
    color: #ffffff;
    text-decoration: none;
    font-size: 20px;
}
.insw:hover,
.insw:focus {
    background: #ff5959;
    background: -webkit-gradient(linear, left top, left bottom, from(#ff5959), to(#b62f2f));
    background: -moz-linear-gradient(top, #ff5959, #b62f2f);
    background: linear-gradient(to bottom, #ff5959, #b62f2f);
    color: #ffffff;
    text-decoration: none;
}
.insw:active {
    background: #982727;
    background: -webkit-gradient(linear, left top, left bottom, from(#982727), to(#982727));
    background: -moz-linear-gradient(top, #982727, #982727);
    background: linear-gradient(to bottom, #982727, #982727);
}

.commodity_img{
border: 0.5px solid  #ddd;
width: 450px;
height: 100%;
padding: 50px;
max-width: 100%;
margin:0 auto;
margin: 0px  100px 40px;
margin-left:auto ;
line-height: 2em;
padding: 10px;
float: left;

}

.commodity_img:hover{
background-color: red;
transform:rotate(3deg);
}
</style>

</head>
<body style="font-family:Microsoft JhengHei;">
   
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      <button type="button"  class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

      <a class="navbar-brand" href="http://10.11.186.21/center/index.php/Company/Web/index" style="color: black">

			<?php

				$query = $this->db->query("SELECT * FROM basicinformation");
				$row = $query->row_array(); 
				echo $row['company'];

			?>

	    </a>

    </div>

    <div class="collapse navbar-collapse " id="myNavbar">

      <ul class="nav navbar-nav" >

            <li><a data-toggle="tab" onclick="history.go(-1)">返回</a></li>
       
			<li>
			<?php  if( base64_decode($_COOKIE["customer_id"]) == $id &&  $id != null){  ?>	
			<a href="./Setuserfile?value=Client_logoout" class="nav-link disabled"  >
			<?php  echo base64_decode( $_COOKIE["customer_name"] );  ?>
      /登出
			</a>
			</li>
			<?php } ?>


      </ul>

    </div>
  </div>
</nav>












<?php

$commodity = $_GET['value'];

$query = $this->db->query( "SELECT * FROM  business_commodity  where  commodity_id = '$commodity'" );
  
if ( $query->num_rows() > 0 ){

$row = $query->row_array();   

?>







<div class="container">

<form action="./Setproductinformation?value=order&cid=<?php echo $commodity ?>" method="post">
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<h3 style="font-family: Microsoft JhengHei;"><b>填寫購買資料:</h3><br>




	

  <div class="form-group">
  <label for="exampleInputname">商品名稱:</label><br>
  <h2><b><?php echo $row['commodity_name']; ?>/編號:<?php echo $row['commodity_id']; ?></b></h3>
  
        
  </div>


  <div class="form-group">
  <label for="exampleInputPrice">商品價格:</label><br>
  <h2 ><b>台幣:<a id ="price"><?php echo $row['commodity_price']; ?></a>元</b></h3>
  <input type="hidden" value="<?php echo $row['commodity_price'] ?>" name="price">
  </div>

  <div class="form-group">
  <label for="exampleInputQuantity" style="color:red;">※購買數量:</label><br>
  <input type="text" class="form-control" placeholder="Enter Quantity"  onkeyup ="totla()" value="0"  id="Quantity" name="quantity"  autocomplete="off" >
  </div>


   <div class="form-group">
  <label for="exampleInputEmail1" >您的總金額:</label><br>
  <h2 style="color:red"><b>NT$:<a id="total"></a>元</b></h3>
  <input type="hidden" value="" id="totals" name="total">
    <?php } ?>
  </div>




      <script type="text/javascript">

      function totla(){
      var price = document.getElementById("price").text;  
      var quantity = document.getElementById("Quantity").value;  

      if(!isNaN(quantity)){

      document.getElementById("total").innerHTML = price * quantity;
      document.getElementById("totals").value = price * quantity;
      }else{

      alert('請輸入數字!');
      document.getElementById("quantity").value="";
      }

      }
      </script>






<div style="width: 100%;height:100%;float: left;">
    <?php
    $this->db->where('commodity_name', $row['commodity_name'] );
    $this->db->from('business_commodity_imgs');
    $query = $this->db->get();
    foreach ($query->result() as $row){
    ?>
    <img src=http://10.11.186.21/center/file/<?php echo $row->commodity_imgs;?> id="images" class="commodity_img" onclick="s()">
    <?php }  ?>

</div><hr>





	<div class="form-group">
  <?php
  $query = $this->db->query("SELECT * FROM customer_users  where  customer_id = '$id'" );
  if ( $query->num_rows() > 0 ){
  $row = $query->row_array();   
  }

  ?>
	<label for="exampleInputEmail1">訂購者姓名:</label>
	<input type="text" class="form-control"  placeholder="Enter Name" id="id" value="<?php echo $row['customer_name'];?>" name="name" >
	</div>

	<div class="form-group">
	<label for="exampleInputPassword1">訂購者電話</label>
	<input type="text" class="form-control"  placeholder="Enter Telphone"  id="pw" value="<?php echo $row['customer_tel'];?>" name="tel">
	</div>


  <div class="form-group">
  <label for="exampleInputPassword1">寄送地址</label>
  <input type="text" class="form-control"  placeholder="Enter Adress"  id="pw" value="<?php echo $row['customer_address'];?>" name="address">
  </div>

  <br>

	<input type="submit" class="btn btn-primary insw"  onclick="check()" value="購買">
  <button type="button" class="btn btn-primary insw"  onclick="history.go(-1)">取消</button>
	</form>
 

  <br>
  </div>









</div>
</div>










































</body>
</html>