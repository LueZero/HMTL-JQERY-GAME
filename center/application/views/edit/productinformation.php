<?php	

defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
echo base64_decode($_COOKIE['office_id']) != null  ?  "" : '<script>alert("請登入")</script><meta http-equiv="refresh" 
content="0;url=http://10.11.186.21/center/index.php/Company/Web/index" />'; 

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<title>商品資料</title>
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

body , h3{
font-family:Microsoft JhengHei;
}

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
  <li class="nav-item ">
  <a class="nav-link" href="/center/index.php/Company/Web/index" style="color: black;font-weight:bold;">回到前頁<span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/center/index.php/Company/Web/memberprofile" style="color: black;font-weight:bold;">員工資料</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/center/index.php/Company/Web/productinformation" style="color: black;font-weight:bold;">商品資料</a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="/center/index.php/Company/Web/editpage" style="color: black;font-weight:bold;">編輯網頁</a>
  </li>
  <li class="nav-item">
  <a href="Setmemberprofile?value=logout" class="nav-link " href="#" style="color: black;font-weight:bold;">登出</a>
  </li>
</ul>
</div>
</nav>


<div class="container">

<h2 style="font-family:Microsoft JhengHei;" >商品資料:</h2><hr>



<ul class="nav nav-tabs"  id="myTab"  >

<li>
   <a href="#mod_list" data-toggle="tab">
   <button type="button" class="btn " style="background-color: #F77171;color:white;">商品狀況</button>
   </a>
</li>
<li>
   <a href="#role_list" data-toggle="tab" >
   <button type="button" class="btn" style="background-color: #F77171;color:white;">新增修改</button>
   </a>
</li>
<li>
   <a href="#member_list" data-toggle="tab">
   <button type="button" class="btn" style="background-color: #F77171;color:white;">客戶管理</button>
   </a>
</li>
<li>
   <a href="#list" data-toggle="tab">
   <button type="button" class="btn" style="background-color: #F77171;color:white;">商品管理</button>
   </a>
</li>
<li>
   <a href="#saleslist" data-toggle="tab">
   <button type="button" class="btn" style="background-color: #F77171;color:white;">銷貨狀態</button>
   </a>
</li>
</ul>




<div class="tab-content" id="myTabContent">

   

       <div class="tab-pane fade" id="mod_list" style="">

        <br>
        <a class="btn " data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: #DDD;color:black">微改區</a>             

         <div class="collapse" id="collapseExample" style="">

           <form style="padding:50px;" action="setproductinformation?value=updateorder" method="POST" enctype="multipart/form-data"  >
              
                  <table class="table">
                    <thead>
                      <tr>
                    
                        <th scope="col">#訂購金額</th>
                        <th scope="col">#送達地址</th>
                        <th scope="col">#訂購狀態</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody> 

                      <?php 
                        $number =   $_GET['number'];
                        $query = $this->db->query("SELECT * FROM business_order where orders_no ='$number' ");
                        foreach ($query->result() as $row){
                      ?>

                      <tr>
                
                      </td>

                      <?php   echo  "<input type='hidden' value='$row->orders_no' style='width:50px;' name='ordno'>";  ?>
                      <td><?php   echo  "<input type='text' value='$row->order_total' style='width:50px;' name='ordtotal'>" ?></td>
                      <td><?php   echo  "<input type='text' value='$row->customer_address' style='width:50px;' name='orderaddress'>" ?></td>
                      <td><?php   echo  "<input type='text'  value='$row->order_status' style='width:50px;' name='status'>" ?></td>
                      <td><input type="submit" value="儲存" class="btn " ></td>    
                      <?php } ?>
                      </tr>
                    </tbody>
                  </table>
         
               </form>



           </div>             























          <form style="padding:50px;" action="#" method="GET" enctype="multipart/form-data"  >
           <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#訂購編號</th>
                        <th scope="col">#訂購人</th>
                        <th scope="col">#商品名稱</th>
                        <th scope="col">#商品編號</th>
                        <th scope="col">#訂購時間</th>
                        <th scope="col">#訂購金額</th>
                        <th scope="col">#送達地址</th>
                        <th scope="col">#訂購狀態</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody> 

                      <?php 

                        $query = $this->db->query("SELECT * FROM  business_order order by order_time desc ");     
                        $con = $this->db->affected_rows();  
                        for($a=0;$a<$con;$a++){
                        $row = $query->unbuffered_row();  
                        
                      ?>

                      <tr>
                        <th scope="row">
                        <?php 
                        echo '<tr><td><p>
                        <button class="btn" type="submit" value='.$row->orders_no.' name="number" style="background-color:#DDD;color:black"> 
                        '.$row->orders_no.' </button></td>';
                        ?>
                        </th>
                        <td><?php   echo  $row->customer_name; ?></td>
                        <td><?php   echo  $row->commodity_name; ?></td>
                        <td><?php   echo  $row->commodity_id; ?></td>
                        <td><?php   echo  $row->order_time; ?></td>     
                        <td><?php   echo  $row->order_total; ?></td> 
                        <td><?php   echo  $row->customer_address; ?></td> 
                        <td><?php   echo  $row->order_status; ?></td> 
                        
                        <?php if( $row->order_status == 'null' or $row->order_status == '備貨中'){ ?>
                        <td><a href="Setproductinformation?value=commodity_sales&cid=<?php echo $row->orders_no;?>"> 銷貨 </td>  
                        <?php }?>               
                      </tr>
                      
                   <?php } ?> 
                    </tbody>
                  </table>
              </form>






      </div>







             <br>
              <div class="tab-pane fade" id="member_list">
                  
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">帳號</th>
                        <th scope="col">密碼</th>
                        <th scope="col">信箱</th>
                        <th scope="col">手機</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php 

                        $query = $this->db->query("SELECT * FROM customer_users");
                        foreach ($query->result() as $row){
                      
                      ?>
                      <tr>
                        <th scope="row"><?php   echo  $row->no; ?></th>
                        <td><?php   echo  $row->customer_id; ?></td>
                        <td><?php   echo  $row->customer_name; ?></td>
                        <td><?php   echo  $row->customer_email; ?></td>
                        <td><?php   echo  $row->customer_tel; ?></td>     
                        <td><a href="productinformation_userdata?value=<?php echo  $row->customer_id; ?>"> 修改 </td>               
                      </tr>
                       <?php } ?> 
                    </tbody>
                  </table>
                
                        
              


                </div>




        











<script type="text/javascript">

    function myFunction(){
       var files = document.getElementById("Upload_File").value;
       var fileCount = document.getElementById("Upload_File").files.length;  
       var fielsdata = document.getElementById("inputFileAgent").text  = "目前檔案數量:"+fileCount;

       if( fileCount > 5 ){

             alert("最多僅支援5張相片，你選擇了" + fileCount + "張，請重新選擇！");
             document.getElementById("Upload_File").value = '';
             document.getElementById("inputFileAgent").text ='目前檔案數量:0';
             return;
       }

     }

     function mycheck(){

     var names      =  document.getElementById("name").value;
     var contents   =  document.getElementById("content").value;
     var price      =  document.getElementById("price").value;
     var quantity   =  document.getElementById("quantity").value;
     var size       =  document.getElementById("size").value;
     var unit       =  document.getElementById("unit").value;                             
     var fileCount  = document.getElementById("Upload_File").files.length;
     var chlk       = document.getElementById("check_File").checked;          
     if( names === false  &&  contents === false ){

          alert('產品欄位確實填寫');

          return false;

      }
  
    if(  fileCount >= 1 && chlk  ===  false ){

          alert('加入產品圖片，請確認勾選欄位是否勾選');

          return false;

        }else{


          submit();

        }
    }
</script>
  <div class="tab-pane fade " id="role_list">
   
      <form style="padding:10px;" action="setproductinformation?value=insertcommodity" method="post" enctype="multipart/form-data"  >

          <div class="form-group">


            <label for="exampleInputEmail1"><h3><b>商品名稱</b></h3></label>
            <input type="text" id="name" class="form-control"  aria-describedby="emailHelp" placeholder="輸入您的商品名稱" name="name">



            <br>
            <input type="file" name="Upload_File[]" id="Upload_File" multiple="multiple" onchange="myFunction()" style="display:none">
                         
         
            <input type="button" class="btn" style="background-color: #DDD;color:black" onclick="document.getElementById('Upload_File').click()" value="圖片選擇"/>
            <br><br>  
            <input type="checkbox" id="check_File" value="0"  name="checks"  ><label for="exampleInputEmail1">上傳圖片/務必勾選/最多五張
            </label> 
            <br><a  id="inputFileAgent" />目前檔案數量:0</a>
          

          </div> 



          <div class="form-group">
            <label for="exampleInputPassword1"><h3><b>商品內容</b></h3></label>
            <textarea class="form-control" rows="5" id="content" placeholder="輸入您的商品內容" name="content"></textarea>
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1"><h3><b>商品價格</b></h3></label>
            <input type="text" class="form-control" id="price" placeholder="輸入您的商品價格" name="price">
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1"><h3><b>商品數量</b></h3></label>
            <input type="text" class="form-control" id="quantity" placeholder="輸入您的商品數量" name="quantity">
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1"><h3><b>商品尺寸</b></h3></label>
            <input type="text" class="form-control" id="size" placeholder="輸入您的商品尺寸" name="size">
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1"><h3><b>商品單位</b></h3></label>
            <input type="text" class="form-control" id="unit" placeholder="輸入您的商品單位" name="unit">
          </div>


          <div class="form-group">
            <label for="exampleInputPassword1"><h3><b>選擇商品分類</b></h3></label>
            <select class="form-control" id="exampleSelect2" name="class_name">
              <?php

              $this->load->database(); 
              $query = $this->db->query("SELECT * FROM business_classification");
              foreach ($query->result() as $row){

              echo  '<option>'.$row->classification_title.'</option>';
              }

              ?>
            </select>
            <small id="emailHelp" class="form-text text-muted" style="text-decoration:underline;">如空白，請先在下方新增</small>
         </div>

      <button type="submit"  class="btn btn-primary" onclick="return mycheck()" style="float: right;">建立商品</button>

      </form>





  
      <form style="padding: 10px;" action="setproductinformation?value=insertclass" method="post">
         <h4></h4>
          <div class="form-group">
            <label for="exampleInputEmail1"><h3><b>新建分類</b></h3></label>
            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="輸入類別" name="class_name">
            <small id="emailHelp" class="form-text text-muted" style="text-decoration:underline;">新增一項分類</small>
          </div>
          <button type="submit" class="btn btn-primary" style="float: right;" >新增分類</button>
      </form>
      <br><br><br>


</div>














            
<div class="tab-pane fade" id="list">




            <br> 
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">商品編號</th>
                  <th scope="col">商品名稱</th>
                  <th scope="col">商品分類</th>
                  <th scope="col">前往觀看</th>
                 
                </tr>
              </thead>
                  <?php

                  $query = $this->db->query("SELECT * FROM business_commodity");
                  foreach ($query->result_array() as $row)
                  {      

                  ?>
                  <tbody>
                  <tr>
                  <th scope="row"><?php echo $row['no']; ?></th>
                   <td><?php echo $row['commodity_id'];  ?></td>
                  <td><?php echo $row['commodity_name']; ?></td>
                  <td><?php echo $row['commodity_classification'];?></td>
                  <td><a href="productinformation_product?value=<?php echo $row['commodity_id'];?>">詳細資料</a></td>
      
                  <?php } ?>
                  </tr>
              </tbody>
            </table>




</div>






















<div class="tab-pane fade" id="saleslist">
  <table class="table">
     <?php

    $this->db->select_sum('sales_total');
    $query = $this->db->get('business_sales');

    if ($query->num_rows()  > 0){

    $row = $query->row();
      ?>
    <thead>
      <tr>
        <th>淨賺金額: <?php  echo $row->sales_total;?> 元/<a href="Setuserfile?value=excel">產生報表</a></th>
        <th></th>
      </tr>
    </thead>
  <?php }  ?>
  </table>



<table class="table">
    <thead>
      <tr>
        <th>帳號</th>
        <th>姓名</th>
        <th>商品名稱</th>
        <th>商品編號</th>
        <th>銷貨金額</th>
        <th>銷貨狀況</th>
        <th>銷貨時間</th>
      </tr>
    </thead>
    <tbody>
    <?php

    $query = $this->db->query("SELECT * FROM business_sales");

    foreach ($query->result() as $row){

    ?>
      <tr>
        <td><?php echo   $row->customer_id;?></td>
        <td><?php echo   $row->customer_name;?></td>
        <td><?php echo   $row->commodity_id;?></td>
        <td><?php echo   $row->commodity_name;?></td>
        <td><?php echo   $row->sales_total ;?></td>
        <td><?php echo   $row->sales_status ;?></td>
        <td><?php echo   $row->sales_time ;?></td>
      </tr>
    <?php   } ?>
    </tbody>
  </table>
</div>
































</div>

</div>
























<!--
<h1>查詢員工</h1>
<label for="keyword">請輸入員工編號：</label>
<input type="text" id="keyword">
<button id="search">查詢</button>
<p id="searchResult"></p>
<h1>新建員工</h1>
<label for="staffNumber">請輸入員工編號：</label>
<input type="text" id="staffNumber"><br>
<label for="staffName">請輸入員工姓名：</label>
<input type="text" id="staffName"><br>
<label for="staffSex">請輸入員工性別：</label>
<select id="staffSex">
<option value="男">男</option>
<option value="女">女</option>
</select><br>
<button id="save">保存</button>
<p id="createResult"></p>
<script type="text/JavaScript">
$(document).ready(function() {
$("#search").click(function() {

    $.ajax({

        type: "GET",
        url: "http://10.11.186.21/center/index.php/Company/Web/Setproductinformation?value=insertclass&number= " + $("#keyword").val(),
        dataType: "json",
        async: false,



        ucscess: function(data) {


            if (data.number) {


        


            

                } else {

                 
                $("#searchResult").html(data.msg);
            }
          },


        error: function(jqXHR) {

            alert("發生錯誤: " + jqXHR.status);

        }
    })

})



$("#save").click(function() {
    $.ajax({
        type: "POST",
        url: "service.php",
        dataType: "json",
        data: {
            name: $("#staffName").val(),
            number: $("#staffNumber").val(),
            sex: $("#staffSex").val()               
        },
        success: function(data) {
            if (data.name) {
                $("#createResult").html('員工：' + data.name + '，儲存成功！');
            } else {
                $("#createResult").html(data.msg);
            }                   
        },
        error: function(jqXHR) {
            alert("發生錯誤: " + jqXHR.status);
        }
    })
})
});
</script>
-->
</div>
</body>
</html>