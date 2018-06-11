<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
ini_set("session.cookie_httponly", 1);
error_reporting(0);

$this->load->database();	

$customer_id = base64_decode( $_COOKIE["customer_id"] );

if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" , $customer_id  )   ){		

echo'請勿使用特殊符號..';
exit;

}


$query = $this->db->query("SELECT * FROM basicinformation");
$row = $query->row_array(); 

?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<meta charset="utf-8">
<title>	<?php	echo $row['company'];	?></title>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

<script src="/center/class/WebSocket-Node-master/lib/WebSocketServer.js"></script>


<!--<script src="/center/ratchet-v2.0.2/js/ratchet.js"></script>-->
</head>
<style type="text/css">
.insw{
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 9px 15px;
    border: 0px solid #a12727;
    border-radius: 10px;
    background: #F77171;
    background: -webkit-gradient(linear, left top, left bottom, from(#ff4a4a), to(#992727));
    background: -moz-linear-gradient(top, #F77171, #F77171);
    background: linear-gradient(to bottom, #F77171, #F77171);
    text-shadow: #591717 1px 1px 1px;
    font: normal normal bold 10px georgia;
    color: white;
    text-decoration: none;
    font-size: 20px;
}
.insw:hover,
.insw:focus {
       background: #F77171;
    background: -webkit-gradient(linear, left top, left bottom, from(#ff5959), to(#b62f2f));
    background: -moz-linear-gradient(top, #ff5959, #b62f2f);
    background: linear-gradient(to bottom, #ff5959, #b62f2f);
    color: #ffffff;
    text-decoration: none;
}
.insw:active {
    background: #F77171;
    background: -webkit-gradient(linear, left top, left bottom, from(#982727), to(#982727));
    background: -moz-linear-gradient(top, #982727, #982727);
    background: linear-gradient(to bottom, #982727, #982727);
}





.from{
background-color:#F77171;
box-shadow:0px 0px 10px #000;
width: 80%;
margin:0 auto;
padding: 5px;

}

.logoin{
background-color:#F77171;
box-shadow:0px 0px 10px #000;
width: 80%;
margin:0 auto;
padding: 5px;
}







h3{
font-family:Microsoft JhengHei;


}








#outbox{
width:100%; 
max-width: 100%;
padding: 30px;
}
.content_box{
cursor:pointer;
position: relative;
left: 10%;
width:480px;
max-width: 100%;
height: 100%;
float: left;
font-size:1em;
border: 5px solid  #F77171;
margin: -30px 100px 100px 0px;
padding: 10px;
line-height: 1em;
letter-spacing:1px;
color:#353535;
-webkit-border-radius: 50px;
-moz-border-radius: 50px;
float: left;
}

@media only screen and (max-width: 600px) {
.content_box{ 
position: relative;
left: 0%;
   
}
}



.commodity_img{
border: 0.5px solid  #ddd;
width: 30%;
max-width: 100%;
height: 100%;
margin: 10px 0px 0px 15%;
line-height: 2em;
padding: 10px;
float: left;

}

.commodity_img:hover{
background-color: red;
transform:rotate(3deg);
}


.text{
height: 60px;
overflow-y: auto;
line-height: 20px;
word-break: break-all;
}







.message{
 	width: 100%;
    height: 290px;
    overflow: auto;

}
</style>

<body style="font-family:Microsoft JhengHei;">
   
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button"  class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="http://10.11.186.21/center/index.php/Company/Web/" style="color: black">
			<?php
				echo $row['company'];
			?>
	  </a>
    </div>


    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav">

            <li><a data-toggle="tab" href="#menu1">群眾聊天室</a></li>
            <li><a data-toggle="tab" href="#home">商品專區</a></li>
      
			<?php if(  base64_decode($_COOKIE["office_id"]) == null  ){ ?>	
			<li><a data-toggle="tab" href="#menu5">會員專區</a></li>
			<?php } ?>

			<?php if(  base64_decode($_COOKIE["customer_id"]) == null  && base64_decode($_COOKIE["office_authority"]) != 1128){ ?>	

			<li><a data-toggle="tab" href="#menu3">管理</a></li>

			<?php } ?>

			<?php if( base64_decode($_COOKIE["office_authority"]) == 1128 ){ ?>
			<li>
			<a href="backstage">編輯區</a>
			<li>

			<?php } ?>

			<li class="nav-item">

			<?php if( base64_decode($_COOKIE["office_authority"]) == 1128  ){ ?>	
			<a href="Setmemberprofile?value=logout" class="nav-link disabled" href="#">
			管理員/登出
			</a>
			<?php } ?>
			</li>

			<li>
			<?php 

			$query = $this->db->query("SELECT * FROM customer_users where  customer_id = '$customer_id'" );
 	
			if ( $query->num_rows() > 0 ){

			$row = $query->row_array();   

			}
			if( base64_decode( $_COOKIE["customer_id"]) == $customer_id &&  $customer_id != null){ 

			?>	
			<a href="Setuserfile?value=Client_logoout" class="nav-link disabled" href="#">

			<?php echo $row['customer_name'];?>

			/登出

			</a>
			</li>
			<?php } 

			?>

      </ul>
    </div>
  </div>
</nav>








<div class="tab-content">





















<div id="menu1" class="tab-pane fade in active">

<div class="container " >
<h3><b>聊天室:</b></h3>



<button id="a" onclick="check(this)" value="<i class='em em-smile'/></i>"		   class="btn"><i class="em em-smile " /></i></button>
<button id="b" onclick="check(this)" value="<i class='em em-expressionless'/></i>" class="btn"><i class="em em-expressionless" /></i></button>
<button id="c" onclick="check(this)" value="<i class='em em-angry'/></i>" 		   class="btn"><i class="em em-angry" /></i></button>
<button id="d" onclick="check(this)" value="<i class='em em-cry'/></i>" 		   class="btn"><i class="em em-cry" /></i></button>
<button id="e" onclick="check(this)" value="<i class='em em-blush'/></i>" 		   class="btn"><i class="em em-blush" /></i></button>
<button id="f" onclick="check(this)" value="<i class='em em-broken_heart'/></i>"   class="btn"><i class="em em-broken_heart" /></i></button>

<br><br>

<p contentEditable="true" style="width:100%;height:6em;background-color: #ddd;" id="aaa" ></p>
<input type="button" id="sendout" value="發話" class="btn" style="background-color: #ddd;float: right;">



<div class="message" id="message">
<table class="table table-striped">
<thead>
</thead>
</table> 
</div>

</div>
</div>



<script type="text/javascript">







var emoji = ['10',"455"] ;

function check(obj) {

	if( emoji[2] == undefined ){

	  var id = [obj.id];		
	  var p = [obj.value];
	  $("#"+id).css("background-color","#123");		
	  emoji.push(p);
	  return false;

	}else{

	  alert('表情頭貼已確認，想重選請重新整理畫面');

	}


}


$("#sendout").click( function pass(  ){

	var data = document.getElementById("aaa").innerText.replace("\n","<br/>").replace(" ","&nbsp;");
	//data為輸入框的數值
	//假設大頭貼空值就不能發送出去
	if( emoji[2] == undefined  ||  data == "" ){


	alert('表情頭貼請先選，否則無法發送');


	}else{

	//異步傳送	
	$.ajax({

			type :"post",
			url  : "./Setuserfile?value=talk",
			cache:false,
			dataType: "text",
			data : { 

				 data    :    data,	
				 emoji 	 :    emoji,
				
			},	
			success : function(data) {
				              
			   		monitor();
			   		//發送成功前往監聽函數
						    
			},
			error:function (xhr, ajaxOptions, thrownError) {
					//失敗就送出提示框
				   	alert('伺服器忙碌中');
				   	return;
			},

		});

	}



});
//監聽函數
function monitor(){ 

	$.ajax({

			type :"post",
			url  : "./Setuserfile?value=monitor",
			dataType: "text",
			cache:false,
			success : function(data) {
			$("tr").empty();
		   	$("thead").prepend("<tr><th>"+data+"</th></tr>");		
			},
			error:function (xhr, ajaxOptions, thrownError) {
		    //通常ajaxOptions或thrownError只有一個有值
		   	 result = false;
		    },

  	});

}

setInterval( "monitor()",60000);
//每1秒監聽狀況	




</script>



















<!--商品呈現-->
<div id="home" class="tab-pane fade ">


<div id="outbox" style="position: relative;top:-40px;">
<form action="index" method="GET">
<div class="input-group">
<input type="text" class="form-control" placeholder="輸入您想搜尋商品"  aria-describedby="basic-addon1" name="value">
<div class="input-group-btn">
<button class="btn btn-default" type="submit" style="background-color: #F77171;color:white;">搜尋</button>
</div>
</div>
</form>	
</div>
	


<?php

$key = htmlspecialchars($_GET['value']);

if( $key == null ){ 
$query = $this->db->get('business_commodity');
foreach ($query->result() as $row){
$cids = $row->commodity_id;
?>	    

<div class="content_box">

<div class="container">
<h4 style="font-family:Microsoft JhengHei;"><b><?php echo $sname =  $row->commodity_name; ?></b></h4>

<p>NT$:<?php echo $row->commodity_price?>元/<?php echo $row->commodity_unit?>/<?php echo $row->commodity_size?></p>
<hr style="border:none;border-top:1px solid black;">
<p>分類:<?php echo $row->commodity_classification?></p>
<p>喜歡:<?php echo $row->commodity_like_number?></p>




<a  href="shop?value=<?php echo $row->commodity_id;?>"><button type="button" class="btn btn-danger" id="shop">購買</button></a>
<a  href="Setproductinformation?value=like&cid=<?php echo $cids;?>"><button type="button" class="btn btn-danger" id="shop">給我一個喜歡</button></a>




<br><br>
<p class="text-justify text">
<?php echo nl2br($row->commodity_content) ;?>
</p>
</div>		

<?php

$this->db->where('commodity_name', $sname);
$this->db->from('business_commodity_imgs');
$query = $this->db->get();
foreach ($query->result() as $row){

?>

<img src=http://10.11.186.21/center/file/<?php echo $row->commodity_imgs;?>  id="images" class="commodity_img" onclick="s()">

<?php } ?>

</div>

<?php }	 ?>

</div>

<?php }else{ ?>


<?php

$this->db->like('commodity_name', $key); 
$this->db->or_like('commodity_keywords',  $key); 
$this->db->from('business_commodity');
$query = $this->db->get();
foreach ($query->result() as $row){

?>

<div class="content_box">
<div class="container">
<h4 style="font-family:Microsoft JhengHei;"><b><?php echo $sname =  $row->commodity_name; ?></b></h4>
<p>NT$:<?php echo $row->commodity_price?>元/<?php echo $row->commodity_unit?>/<?php echo $row->commodity_size?></p>
<hr style="border:none;border-top:1px solid black;	">
<p>類別:	<?php echo $row->commodity_classification?></p>
<p>喜歡:<?php echo $row->commodity_like_number?></p>




<a  href="shop?value=<?php echo $row->commodity_id;?>" ><button type="button" class="btn btn-danger" id="shop">購買</button></a>
<a  href="Setproductinformation?value=like"><button type="button" class="btn btn-danger" id="shop">給我一個喜歡</button></a>


<br><br>

<p class="text-justify text">
<?php echo nl2br($row->commodity_content) ;?>
</p>



</div>		
<?php

$this->db->where('commodity_name', $sname);
$this->db->from('business_commodity_imgs');
$query = $this->db->get();
foreach ($query->result() as $row){
?>
<img src=http://10.11.186.21/center/file/<?php echo $row->commodity_imgs;?> id="images" class="commodity_img" onclick="s()">
<?php }  ?>



</div>
<?php }	 ?>
</div>	
<?php }	 ?>





<div id="menu3" class="tab-pane fade">
<div class="container">
<?php if( base64_decode( $_COOKIE["office_id"] ) == null ){ ?>
<h3 style="font-family:Microsoft JhengHei;"></h3>

<form action="./Setmemberprofile?value=logoing" method="post">
<div class="container">
		<div class="form-group">
		<label for="exampleInputEmail1">帳號</label>
		<input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Id" name="id">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
		<label for="exampleInputPassword1">密碼</label>
		<input type="password" class="form-control"  placeholder="Enter Password"  name="pw">
		</div>
		<div class="form-check">
		</div>
		<button type="submit" class="btn btn-primary">登入</button>
		</div>	
</form>

<?php }else{ ?>
	
<a href="Setmemberprofile?value=logout" class="nav-link disabled" >

			<?php echo base64_decode($_COOKIE["office_name"]);?>

			先生你好/登出

			</a>
<?php } ?>
	
</div>
</div>
			
		
			
		











<div id="menu5" class="tab-pane fade" >

<div class="container"><br>

<?php if( base64_decode( $_COOKIE["customer_id"] )  == null ){?>

        <button style="font-family:Microsoft JhengHei;" id="usesr" class="insw">會員申辦<br></button>
		<button style="font-family:Microsoft JhengHei;" id="logoin" class="insw">會員登入</button>  
		</div>
		<hr>  

        	<div class="from" style="display: none;">	
			 <form action="./Setuserfile?value=insertdate" method="POST" >
			  <div class="form-group">
				<label for="exampleInputPassword1">您的姓名</label>
				<input type="text" class="form-control"   name="name" id="name"> 
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">申辦帳號</label>
				<input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" name="id" id="id">
				<small id="emailHelp" class="form-text text-muted">歡迎您的註冊</small>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">申辦密碼</label>
				<input type="password" class="form-control"  placeholder="Password"  name="pw" id="pw">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">再次確認密碼</label>
				<input type="password" class="form-control"  placeholder="Password"  name="pw2">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">信箱</label>
				<input type="email" class="form-control"  placeholder="Password"  name="email">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">電話</label>
				<input type="text" class="form-control"  placeholder="Password"  name="tel">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">住址</label>
				<input type="text" class="form-control"  placeholder="Password"  name="address">
			  </div>
			  <div class="form-check">
			  </div>
			  <button type="submit" class="btn btn-primary" onclick="return inser()">申辦</button>
			</form>
		 </div>	




		 <div class="logoin" style="display: none;">	
			 <form action="./Setuserfile?value=Client_logoing" method="POST" >

			  <div class="form-group">
				<label for="exampleInputPassword1">帳號</label>
				<input type="text" class="form-control" id="logo_id" placeholder="Enter id"  name="logo_id" >
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">密碼</label>
				<input type="password" class="form-control" id="logo_pw" aria-describedby="emailHelp" placeholder="Enter pw" name="logo_pw">	
			  </div>
			  <div class="form-check">
			  </div>
			  <button type="submit" class="btn btn-primary" onclick="return logoin()">登入</button>
		
			</form>
		 </div>	  
		<?php }else{ ?>
       <div class="container">
		<p>
  		<a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">訂購資訊</a>
  		<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  		 會員資料
  		</a>
		</p>
		<div class="row">
		  <div class="col">
		    <div class="collapse multi-collapse" id="multiCollapseExample1">
		      <div class="card card-body">

				<h3  style="font-family:Microsoft JhengHei;"><b>訂單資訊:</b></h3><br>

				<?php
				$query = $this->db->query("SELECT * FROM business_order where customer_id = '$customer_id'");
				foreach ($query->result() as $row){  
				?> 
				<a>訂購商品編號:<?php    echo $row->orders_no.'<br>'; ?></a>   
				<a href="http://10.11.186.21/center/index.php/Company/Web/shop?value=<?php echo $row->commodity_id; ?>">
				   訂購商品:<?php echo $row->commodity_name.'<br>'; ?></a>    
				<a>訂購數量:<?php   	    echo $row->order_quantity.'<br>'; ?></a> 
				<a>訂購金額NT$:<?php     echo $row->order_total.'元<br>'; ?></a> 
				<a>商品狀態:<?php     echo $row->order_status.'<br>'; ?></a> 
			
				<hr style="border:none;border-top:1px dashed #0066CC;">
				<?php   }      ?>	 



				</div>
			   <?php } ?>
		      </div>
		    </div>



		</div>








		<div class="collapse" id="collapseExample">
		<div class="card card-body">
		<?php 
		$query = $this->db->where('customer_id',$customer_id)->get('customer_users');
		if ($query->num_rows() > 0){
		$row = $query->row();

		?>
		<form action="./Setuserfile?value=update_users&key=<?php echo $row->customer_id; ?>"   method="post">   	
		姓名:<input type="text" value="<?php echo $row->customer_name;?>"  class="form-control" name="username">
		帳號:<input type="text" value="<?php echo $row->customer_id;?>"  class="form-control" name="userid" readonly="readonly" onclick="noid()">
		密碼:<input type="text" value="<?php echo $row->customer_password;?>"  class="form-control" name="userpw">
		信箱:<input type="text" value="<?php echo $row->customer_email;?>"  class="form-control" name="useremail">
		電話:<input type="text" value="<?php echo $row->customer_tel;?>"  class="form-control" name="usertel">
		地址:<input type="text" value="<?php echo $row->customer_address;?>"  class="form-control" name="useraddress"><br>
		<button type="submit" class="btn btn-primary" >修改</button>
		<?php }  ?>
		</div>
		</div>




</div>





<script type="text/javascript">
function noid(){
alert('帳號無法修改');
}	
</script>


















<script type="text/javascript">

function inser(){

	var name = document.getElementById('name').value,
	id   = document.getElementById('id').value,	
	pw   = document.getElementById('pw').value;

	if( name == "" && id == "" && pw == ""){
		alert('欄位確實填寫!!!');
		return false;
	}else if( id.length >= 10  && pw.length >=10 ){

		alert('帳號超出10以上');
		return false;
	}


}


$(document).ready(function(){

$("#usesr").click(function(){
$(".from").animate({width:'toggle'},300);;
$(".logoin").fadeOut(1000);
 return false;
});


$("#logoin").click(function(){
$(".logoin").animate({width:'toggle'},300);;
$(".from").fadeOut(300);
 return false;
});
});



function logoin(){

var logo_id = document.getElementById("logo_id").value,
    logo_pw = document.getElementById("logo_pw").value,
    pattern = /^[\w\u4e00-\u9fa5]+$/gi;


if( logo_id == "" 	){

	alert('請確認欄位是否輸入');

	document.getElementById("logo_id").style.backgroundColor= "#DDD";

	return false;

}else if( logo_pw == "" ){

	alert('請確認欄位是否輸入');

	document.getElementById("logo_pw").style.backgroundColor= "#DDD";

	return false;

}


alert('歡迎光臨,正在驗證資料中..');


}
</script>	
</div>
</body>
</html>