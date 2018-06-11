<?php defined('BASEPATH') OR exit('No direct script access allowed'); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<meta charset="utf-8">
<title>設定</title>
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
</style>
</head>
<body style="font-family:Microsoft JhengHei;">
<div class="alert alert-primary" role="alert">
  <h2 style="font-family:Microsoft JhengHei;">開始設定系統!</h2>
  <form action="./index.php/welcome/setdata" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">公司名稱</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Company" name="company">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">帳號</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter ID" name="id">
    </div>
	<div class="form-group">
    <label for="exampleInputPassword1">密碼</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="pw">
    </div>
	<div class="form-group">
    <label for="exampleInputPassword1">信箱</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email">
    </div>
  <button type="submit" class="btn btn-primary">設定</button>
</form>
</div>
</body>
</html>