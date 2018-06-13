<?php	
defined('BASEPATH') OR exit('No direct script access allowed'); 
error_reporting(0);

$id = base64_decode($_COOKIE['office_id']);


if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" , $id  )   ){ echo'請勿使用特殊符號..'; exit; }

 
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

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<style type="text/css">
body{

font-weight:bold;
  font-family:Microsoft JhengHei;
}



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
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F77171;">
  <a class="navbar-brand" href="./backstage"  style="color: black;font-weight:bold;">後台管理</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/center/index.php/Company/Web/index" id="iex" style="color: black;font-weight:bold;">回到首頁<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/center/index.php/Company/Web/memberprofile" id="iex2" style="color: black;font-weight:bold;">員工資料</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="/center/index.php/Company/Web/productinformation" id="iex3" style="color: black;font-weight:bold;">商品資料</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/center/index.php/Company/Web/editpage" id="iex4" style="color: black;font-weight:bold;">編輯網頁</a>
      </li>
	  <li class="nav-item">
        <a href="Setmemberprofile?value=logout" class="nav-link " href="#" style="color: black;font-weight:bold;">登出</a>
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

<?php


$a =  $this->db->count_all('business_commodity');
$c =  $this->db->count_all('business_sales');
$d =  $this->db->count_all('customer_users');
$e =  $this->db->count_all('business_order');
$query = $this->db->select_sum('commodity_like_number')->get('business_commodity');

    foreach ($query->result() as $row){

     
      $b =   $row->commodity_like_number;


    }


?>







    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.  ***原始資料***

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([

          ['商品數量', <?php echo $a;?>],
          ['喜歡數'  , <?php echo $b;?>],
          ['購買數量', <?php echo $c;?>],
          ['會員人數', <?php echo $d;?>],
          ['訂單數'  , <?php echo $e;?>]
          //['Zucchini', 1],
          //['Pepperoni', 1]

        ]);

        

        // ************差異之處****************
        // Set chart options
        var options = {
                       'title':'商品分析圓餅圖',
                       'width':360,
                       'height':300
                      };

        
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart( document.getElementById('chart_div') );
        chart.draw( data , options );
      }


    </script>






<div id="chart_div" >
  
</div>















<?php



function report(){

$ci =& get_instance();

$query = $ci->db->select_sum( 'commodity_like_number' )->get( 'business_commodity' );

    foreach ( $query->result() as $row ){

      $row->commodity_like_number;

    }


}

report();


?>
<div class="container">
<?php  echo '<a>商品總量:</a>'.$a.'樣</br>';?>
<?php  echo '<a>會員人數:</a>'.$d.'位</br>';?>
<?php  echo '<a>交易成功:</a>'.$c.'件</br>';?>
<?php  echo '<a>目前訂單數:</a>'.$e.'件</br>';?>
</div>




</div>
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




















</body>
</html>