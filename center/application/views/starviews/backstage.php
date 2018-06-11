<?php	
defined('BASEPATH') OR exit('No direct script access allowed'); 

@$id = base64_decode($_COOKIE['office_id']);


if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" , $id  )   ){ 
          
echo'請勿使用特殊符號..';
      
exit;
}


echo  @$id  != null  ?  "" : '<script>alert("請登入")</script><meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index" />'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<meta charset="utf-8">
<title></title>
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
.iex::before{
  border: 10px solid transparent;
  border-left: 10px solid #f00;
  width: 0;
  height: 0;
  position: absolute;
  left: 100px;
  content: ' '
}
.panel{
  width: 100%;
  height: 380px;
  max-height: 200px;
  margin:0 auto;
  margin-top: 0px;
  padding:25px;
  text-align:center;
  background: #DDDDDD;
  border:solid 1px #DDD;
  box-shadow:
    inset 0 -10px 500px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 0 -10px 10px 0 #a09f9b,
    0 6px 10px 0px #000000;
  font-family:Microsoft JhengHei;
  font-size: 25px;
    text-decoration:underline;
}

.iex2::before{
  border: 10px solid transparent;
  border-left: 10px solid #f00;
  width: 0;
  height: 0;
  position: absolute;
  left: 100px;
  content: ' '
}
.pane2{
    text-decoration:underline;
  width: 100%;
  height: 380px;
  max-height: 200px;
  margin:0 auto;
  margin-top: 0px;
  padding:25px;
  text-align:center;
  background: #DDDDDD;
  border:solid 0px #c3c3c3;
  box-shadow:
    inset 0 -10px 500px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 0 -10px 10px 0 #a09f9b,
    0 6px 10px 0px #000000;
  font-family:Microsoft JhengHei;
  font-size: 25px;
}



.iex3::before{
  border: 10px solid transparent;
  border-left: 10px solid #f00;
  width: 0;
  height: 0;
  position: absolute;
  left: 100px;
  content: ' '
}
.pane3{
    text-decoration:underline;
  width: 100%;
  height: 380px;
  max-height: 200px;
  margin:0 auto;
  margin-top: 0px;
  padding:25px;
  text-align:center;
  background: #DDDDDD;
  border:solid 0px #c3c3c3;
  box-shadow:
    inset 0 -10px 500px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 0 -10px 10px 0 #a09f9b,
    0 6px 10px 0px #000000;
  font-family:Microsoft JhengHei;
  font-size: 25px;
}



.iex4::before{
    border: 10px solid transparent;
  border-left: 10px solid #f00;
  width: 0;
  height: 0;
  position: absolute;
  left: 100px;
  content: ' '
}
.pane4{
    text-decoration:underline;
   width: 100%;
  height: 380px;
  max-height: 200px;
  margin:0 auto;
  margin-top: 0px;
  padding:25px;
  text-align:center;
  background: #DDDDDD;
  border:solid 0px #c3c3c3;
  box-shadow:
    inset 0 -10px 500px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 10px 0 10px 0 #ddd,
    inset 0 -10px 10px 0 #a09f9b,
    0 6px 10px 0px #000000;
  font-family:Microsoft JhengHei;
  font-size: 25px;
}
</style>
</head>
<body style="font-family:Microsoft JhengHei;" >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./backstage">後台管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/center/index.php/Company/Web/index" id="iex">回到首頁<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/center/index.php/Company/Web/memberprofile" id="iex2">員工資料</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="/center/index.php/Company/Web/productinformation" id="iex3">商品資料</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/center/index.php/Company/Web/editpage" id="iex4">編輯網頁</a>
      </li>
	  <li class="nav-item">
        <a href="Setmemberprofile?value=logout" class="nav-link " href="#">登出</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="panel"style="display: none;">回到完整首頁，觀看您你的網頁完整樣子<br><br><span class="x" "><button  class="btn btn-success" style="text-shadow: 2px 2px 3px #434a54;">下一步</button></span> </div>
<div class="pane2"style="display: none;">員工資料頁面,讓你輕鬆編輯員工會員資料<br><br><span class="x2"><button  class="btn btn-success" style="text-shadow: 2px 2px 3px #434a54;">下一步</button></span> </div>
<div class="pane3"style="display: none;">商品資料頁面，讓你輕鬆編輯商品資料<br><br><span class="x3"><button  class="btn btn-success"  style="text-shadow: 2px 2px 3px #434a54;">下一步</button></span> </div>
<div class="pane4"style="display: none;">編輯網頁資料頁面，讓你輕鬆編輯網頁內容<br><br><span class="x4"><button  class="btn btn-success" style="text-shadow: 2px 2px 3px #434a54;">開始使用</button></span> </div>
  </div>
<div class="container">
<p class="text-lowercase">歡迎進入簡易ERP後台管理</p>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/center/imges/test.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>























<script type="text/javascript">

var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)nav\s*\=\s*([^;]*).*$)|^.*$/, "$1");
if( cookieValue == 'pass'){
}else{
$(document).ready(function() {

 $("#iex").addClass("iex");
 $(".panel").slideToggle("slow");

 $(".x").click(function(){

 $(".iex").css('display', 'none');
 $(".panel").css('display', 'none');

 $("#iex2").addClass("iex2");
 $(".pane2").slideToggle("slow");

 });
 $(".x2").click(function(){

 $(".iex2").css('display', 'none');
 $(".pane2").css('display', 'none');

 $("#iex3").addClass("iex3");
 $(".pane3").slideToggle("slow");

});
$(".x3").click(function(){

 $(".iex3").css('display', 'none');
 $(".pane3").css('display', 'none');

 $("#iex4").addClass("iex4");
 $(".pane4").slideToggle("slow");

});

$(".x4").click(function(){

   $(".iex4").css('display', 'none');
   $(".pane4").css('display', 'none');
   document.cookie = "nav=pass";
   location.reload();

});

});

}

</script>




</div>
</div>


</body>
</html>