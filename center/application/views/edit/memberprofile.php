<?php	
 defined('BASEPATH') OR exit('No direct script access allowed'); 

 error_reporting(0);
 
 echo base64_decode($_COOKIE['office_id']) != null  ?  "" : '<script>alert("請登入")</script><meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index" />'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<meta charset="utf-8">
<title>員工資料</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/center/css/bootstrap.css">
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
</style>
</head>
<body style="font-family:Microsoft JhengHei;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="./backstage">後台管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
      <a class="nav-link" href="/center/index.php/Company/Web/index">回到前頁<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
      <a class="nav-link" href="/center/index.php/Company/Web/memberprofile">員工資料</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/center/index.php/Company/Web/productinformation">商品資料</a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="/center/index.php/Company/Web/editpage">編輯網頁</a>
      </li>
	    <li class="nav-item">
      <a href="Setmemberprofile?value=logout" class="nav-link " href="#">登出</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <!-- Content here -->
  
  
  
  
  

<br><h2 style="font-family:Microsoft JhengHei;">員工資料</h2> <br>	
    <button class="btn btn-primary"  id="Button1" onclick="return Button1_onclick()">資料表</button> 
   <br><br>

 <table class="table">
  <thead>
    <tr>
    <th scope="col">員工編號</th>

	  <th scope="col">員工姓名</th>
    <th scope="col">員工密碼</th>
    <th scope="col">員工地址</th>
	  <th scope="col">員工電話</th>
	  <th scope="col">員工信箱</th>
	  <th scope="col">員工到職日</th>
    <th scope="col">刪除</th>
    </tr>
  </thead>
  <tbody>
  <form action="memberprofile" method="GET">
  <?php

	$this->load->database();
  $query = $this->db->query("SELECT * FROM basicinformation");

      if ($query->num_rows() > 0){
      $row = $query->row_array();
      $autoid = $row['id'];
      }


	$query = $this->db->query("SELECT * FROM employeeinformation");			
	$con = $this->db->affected_rows();	
	for($a=0;$a<$con;$a++){

	$row = $query->unbuffered_row();	

  ?>
    
	<?php

	echo '<tr><td><p>
	<button class="btn " type="submit" value='.$row->employeeid.' name="employeeid" > 
	'.$row->employeeid.' </button></td>';
	echo '<td>'.$row->name.'</td>';	
	echo '<td>'.$row->emplopasswd.'</td>';	
	echo '<td>'.$row->address.'</td>';	
	echo '<td>'.$row->telphone.'</td>';	
	echo '<td>'.$row->email.'</td>';
	echo '<td>'.$row->workingday.'</td>';
  echo '<td><a  href="Setmemberprofile?value=delete&name='.$row->employeeid.'" class="btn btn-primary" type="submit"  name="employeeid" >刪除</td></tr>';
	} 

  ?>
  </form>	

  </tbody>
</table>










<div class="code">
<c2 ><br><h2 class="btn btn-primary" style="font-family:Microsoft JhengHei;">更新資料</h2> <br>	</c2>
<pre class="cs">
  <?php

  $id    =   $_GET['employeeid'];
  $query  = $this->db->query("SELECT * FROM employeeinformation where employeeid='$id'");
  $con    = $this->db->affected_rows(); 
  echo $con == 1 ? "":"無資料"; 
  for ( $a=0 ; $a<$con ; $a++ ){
  $row = $query->unbuffered_row();

  ?>
<table class="table table-dark">
  <thead>

 
  
  <form action="Setmemberprofile?value=update" method="post">
	<button type="submit" class="btn btn-primary" value="update">修改</button>
    <tr>
    </tr>
  </thead>
  <tbody>
    <tr>
	<td>員工編號:</td>
     <?php echo '<td><input type="text" class="form-control" value="'.$row->employeeid.'" name="employeeid"></td>'; ?>
    </tr>
	<tr>
	<td>員工密碼:</td>
     <?php echo '<td><input type="text" class="form-control" value="'.$row->emplopasswd.'" name="emplopasswd"></td>';	?>
    </tr>
	<tr>
    <td>中文姓名:</td>
     <?php echo '<td><input type="text" class="form-control" value="'.$row->name.'" name="name"></td>';?>
    </tr>
	<tr>
    <td>性別:</td>
    <?php echo '<td><select class="form-control" id="exampleSelect1" name="gender">
      <option>男生</option>
      <option>女生</option>
    </select>
	<p>'.$row->gender.'</td>';?>
    </tr>
	<tr>
    <td>出生:</td> 
    <?php echo '<td><input class="form-control" type="date" value="'.$row->birthtime.'" id="example-date-input" name="birthtime"></td>';?>
    </tr>
    <tr>
    <td>員工地址:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->address.'" name="address"></td>';?>
    </tr>
    <tr>
    <td>員工電話:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->telphone.'" name="telphone"></td>';?>
    </tr>
	<tr>
    <td>員工電話2:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->telphonetwo.'" name="telphonetwo"></td>';?>
  </tr>
	<tr>
    <td>員工身分證:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->identity.'" name="identity"></td>';?>
  </tr>
	<tr>
    <td>員工信箱:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->email.'" name="email"></td>';?>
    </tr>
  <tr>
    <td>員工最高學歷:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->maxschool.'" name="maxschool"></td>';?>
  </tr>
  <tr>
    <td>員工專長:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->expertise.'" name="expertise"></td>';?>
  </tr>
  <tr>
    <td>員工語言:</td>
    <?php echo '<td><input type="text" class="form-control" value="'.$row->language.'" name="language"></td>';?>
  </tr>
  <tr>
    <td>員工到職日:</td>
	<?php echo '<td><input class="form-control" type="date" id="example-datetime-local-input" name="workingday" value="'.$row->workingday.'"><br><p>'.$row->workingday.'</p></td>';?>
  </tr>
	<tr>
    <td>員工離職日:</td>
  <?php echo '<td><input class="form-control" type="date"  id="example-datetime-local-input" name="departuredate" value="'.$row->departuredate.'"><br><p>'.$row->departuredate.'</p></td>';?>
  </tr>
	<?php } ?>
	</form>
	</tr> 
  </tbody> 
</table>
</pre>
</div>
<script>
$(function() {
 $(".cs").hide();
 $(".code > c2").click(function() {
  $(this)
      .parent()
      .find(".cs")
      .slideToggle();
 });
});
</script>






























	

<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">新增員工資料</a>
 <div class="collapse" id="collapseExample">
  <div class="card card-body">
    <h2 style="font-family:Microsoft JhengHei;">新增資料</h2>
  <form action="./Setmemberprofile?value=insert" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">員工姓名</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name" name="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">員工編號</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter ID" name="employeeid">
    </div>
	<div class="form-group">
    <label for="exampleInputPassword1">員工密碼</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="emplopasswd">
    </div>
	<div class="form-group">
    <label for="exampleInputPassword1">員工信箱</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
    </div>
  <button type="submit" class="btn btn-primary" value="insert">申請</button>
</form>
  </div>
  </div>
</div>
	<script>
	var TestCount = 0;
	function Button1_onclick() {        
	var Form =  window.open(' memberprofiletable?value=<?php echo $row->employeeid; ?> ', '商品總瀏覽', config='height=5000px,width=1024px');
	}
   </script>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>
</body>
</html>