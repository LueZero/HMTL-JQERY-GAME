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
<title>編輯網頁</title>
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
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #F77171;">
<a class="navbar-brand" href="./backstage" style="color: black;font-weight:bold;">後台管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/center/index.php/Company/Web/index" style="color: black;font-weight:bold;">回到前頁<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/center/index.php/Company/Web/memberprofile" style="color: black;font-weight:bold;">員工資料</a>
      </li>
         <li class="nav-item">
       <a class="nav-link" href="/center/index.php/Company/Web/productinformation" style="color: black;font-weight:bold;">商品資料</a>
      </li>
      <li class="nav-item">
      <a class="nav-link " href="/center/index.php/Company/Web/editpage" style="color: black;font-weight:bold;">編輯網頁</a>
      </li>
	  <li class="nav-item">
        <a href="Setmemberprofile?value=logout" class="nav-link " href="#" style="color: black;font-weight:bold;">登出</a>
      </li>
    </ul>
  </div>
</nav>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</div>
</body>
</html>