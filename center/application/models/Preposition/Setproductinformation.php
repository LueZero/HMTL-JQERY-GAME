<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Setproductinformation extends CI_Model{

    






    
            //新增商品//
            public function insertcommodity(){

            $this->load->database();    

            header("Content-Type:text/html; charset=utf-8");


                   for( $a = 0 ; $a < count( $_FILES["Upload_File"]["name"] ) ; $a++ ){


                      $imgtype =  $_FILES["Upload_File"]["type"][$a];
                 
                      $filetype = ['image/jpg', 'image/jpeg', 'image/gif', 'image/bmp', 'image/png'];
                   
                        if (! in_array($imgtype, $filetype) ) {  

                                echo '<script>alert("格式不符，重新上傳")</script>';
                                echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 
                                return;
                        }
                     }
        


             $query = $this->db->get('business_commodity');


                foreach ($query->result() as $row)
                {


                    $commdityys =  $row->no+1;  



                    $row->commodity_name;

                }


          
                
                 echo $row->commodity_name == $_POST['name'] ? '<script>alert("此名稱已經有了")</script><meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation""/>' : "<script>alert('創建商品.....')</script>"  ;

                 echo $row->commodity_name == $_POST['name'] ?  exit() : ""  ;



                             

                  date_default_timezone_set("Asia/Shanghai");

                    
                  $datatime = date("Y/m/d h:i:s");
          

                  $data = array(


                      'commodity_name'            =>  $this->input->post('name', TRUE) ,  
                      'commodity_content'         =>  $this->input->post('content', TRUE) ,
                      'commodity_price'           =>  $this->input->post('price', TRUE) ,
                      'commodity_quantity'        =>  $this->input->post('quantity', TRUE) ,
                      'commodity_size'            =>  $this->input->post('size', TRUE) ,
                      'commodity_unit'            =>  $this->input->post('unit', TRUE) ,
                      'commodity_classification'  =>  $this->input->post('class_name', TRUE) ,
                      'commodity_id'              => 'commoditys'.$commdityys ,
                      'commodity_added_time'      => $datatime
                  
                  );


                 

      

                 $this->db->insert( 'business_commodity' , $data);  
                
           




                  $name = $_POST['name'];


                  $query = $this->db->query("SELECT * FROM business_commodity where  commodity_name = '$name' " );

                 
                  if ( $query->num_rows() > 0 ){

                     $row = $query->row_array();     
                     //$row['commodity_name'];
                     //$row['commodity_id'];
                  }



           


                  if(  $_POST['checks'] !=  "0"   ){
        
                   

                  echo '<script>alert("新增成功/無圖片")</script>';
                  echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation"/>'; 

                  exit; 
              


                  }else{



                  for( $a = 0 ; $a < count( $_FILES["Upload_File"]["name"] ) ; $a++ ){




                  move_uploaded_file($_FILES["Upload_File"]["tmp_name"][$a],"file/".$_FILES["Upload_File"]["name"][$a]);   



                  $data = array(


                        'commodity_imgs'=>$_FILES["Upload_File"]["name"][$a],
                        'commodity_name'=>$row['commodity_name'],
                        'commodity_id'=>$row['commodity_id']

                  );


                  

                  $this->db->insert('business_commodity_imgs', $data);

                

                  }

           

                  echo '<script>alert("新增成功")</script>';
                  echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation""/>'; 
                  $this->db->close();
                  return;


                  }

                  
                   


                  

               }    







              //新增類別//
              public function insertclass(){

              $this->load->database();	



                    if(  $_POST['class_name'] == null ){

                      echo '<script>alert("確實填寫")</script>';
                      echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation"/>'; 
               
                      exit();

                    }



                      $query = $this->db->get('business_classification');





                      foreach ($query->result() as $row)
                      {
                         echo  $id =  $row->no+1;  
                      }





                      $data = array(


                         'classification_title' =>  $_POST['class_name'] ,

                         'classification_commodity_id' => "classcommodity".$id

                       
                      );


                           $this->db->insert('business_classification', $data); 
                           echo "<script>alert('新增成功')</script>";
                           echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation"/>';
                           $this->db->close();


                  

              }
      			
      			
      		  








               //更新產品
               public function updateproduct(){




                $cid =  $_GET['comid']; 
             
                $this->load->database();  
                $productname       = $this->input->post('productname', TRUE);
                $productcontent    = $this->input->post('productcontent', TRUE);     
                $productprice      = $this->input->post('productprice', TRUE);
                $productunit       = $this->input->post('productunit', TRUE);
                $productquantity   = $this->input->post('productquantity', TRUE);
                $productsize       = $this->input->post('productsize', TRUE); 
                $productkeyword    = $this->input->post('productkeyword', TRUE); 
                $productkeywordtwo = $this->input->post('productkeywordtwo', TRUE); 
                $class = $this->input->post('class', TRUE); 
                date_default_timezone_set("Asia/Shanghai");

                $datatime = date("Y-m-d h:i:s");





                $data = array(
                    
                      'commodity_name'            => $productname ,
                      'commodity_content'         => $productcontent ,
                      'commodity_price'           => $productprice ,
                      'commodity_quantity'        => $productquantity,
                      'commodity_size'            => $productsize  ,
                      'commodity_unit'            => $productunit ,
                      'commodity_keywords'        => $productkeyword ,
                      'commodity_keywordstwo'     => $productkeywordtwo ,
                      'commodity_added_time'      => $datatime,
                      'commodity_classification'  => $class
                );

             


                $this->db->where('commodity_id', $cid );
                $this->db->update('business_commodity', $data);
                echo '<script>alert("更新完成")</script>';
                echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation_product?value='.$cid.'"/>';
                $this->db->close();

               }




















               //刪除產品
               public function deleteproduct(){


                $cid = $_GET['comid'];
                $this->db->where('commodity_id', $cid);
                $this->db->delete('business_commodity');

                $cid = $_GET['comid'];
                $this->db->where('commodity_id', $cid);
                $this->db->delete('business_commodity_imgs');

                echo '<script>alert("刪除完成")</script>';
                echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation"/>';
                $this->db->close();
                return;

               }














              //購買商品//
              public function order(){

              $this->load->database();  

              $customer_id  =  base64_decode( $_COOKIE["customer_id"] );

              if( $customer_id == null ){


                     echo  "<script>alert('請登入')</script>";
                     echo  '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 

                     return;
              }





              $tel          =         $_POST['tel'];           
              $address      =         $_POST['address'];
              $price        =         $_POST['price'];
              $quantity     =         $_POST['quantity'];
              $total        =         $_POST['total'];
              date_default_timezone_set('Asia/Taipei');
              $time   =  date('Y-m-d H:i:s');


              //if (preg_match(“/^[".chr(0xa1)."-".chr(0xff)."]+$/”, $str)) { //只能在GB2312情况下使用
              //if (preg_match(“/^[x7f-xff]+$/”, $str)) { //兼容gb2312,utf-8 //判断字符串是否全是中文


              //判断字符串中是否有中文
              if (preg_match("/[^x00-x80]/", $address)) { 
            

              }else{
               echo  "<script>alert('請姓名輸入中文')</script>";
               echo  '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/shop?value='.$_GET['cid'].'"/>'; 
              exit();
              }

              if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" ,$address.$tel.$price.$quantity.$total )   ){ 
          
              echo  "<script>alert('請勿使用特殊符號')</script>";
              echo  '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/shop?value='.$_GET['cid'].'"/>'; 
             
              exit();

              } 


  

          
          
            $query = $this->db->where('commodity_id',$_GET['cid'])->get('business_commodity');


            if ($query->num_rows() > 0){

               $row = $query->row();

              
               $commodity_id = $row->commodity_id;
               $commodity_name = $row->commodity_name;
               $commodity_price = $row->commodity_price;
              
               if( $row->commodity_id != $_GET['cid'] ){



                echo  "<script>alert('您的訂單有問題')</script>";
                echo  '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/shop?value='.$_GET['cid'].'"/>'; 
                return;

               }
      



            }




     


            $query = $this->db->where('customer_id',$customer_id)->get('customer_users');

            



             if ($query->num_rows() > 0){

             $row = $query->row();
             $row->customer_name;


                 if( $customer_id != $row->customer_id ){

                    echo  "<script>alert('無購賣資格')</script>";
                    echo  '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 

                    return;
                 }


             }



            //流水編號字串
            function getrand_id(){

                $string_len = 8;//字串長度
                $null = '';//空值，每次遞迴都會回到這裡
                $word = '123456789';//字典檔 你可以將 數字 0 1 及字母 O L 排除
                $len = strlen($word);//取得字典檔長度
                //總共取幾次
                for($i = 0; $i < $string_len; $i++){ 
                $null .= $word[rand() % $len];
                //隨機取得一個字元
                }


                $ci =& get_instance();
                $query = $ci->db->query("SELECT * FROM business_order");
          
                  //先做一次遞迴判斷
                  foreach ($query->result() as $row){
             
                    while( $row->orders_no == $null ){
                    
                      return  getrand_id();
                            
                      break;  
                    }

                 }
                 //最後
                 return  $null;
            }

        

            $number = getrand_id();



            $data = array(

            'orders_no'             =>      $number,
            'commodity_id'          =>      $commodity_id,
            'commodity_name'        =>      $commodity_name,
            'customer_id'           =>      $row->customer_id,
            'customer_name'         =>      $row->customer_name ,
            'customer_address'      =>      $address ,
            'customer_email'        =>      $row->customer_email ,
            'customer_tel'          =>      $tel ,
            'commodity_price'       =>      $commodity_price , 
            'order_quantity'        =>      $quantity ,
            'order_total'           =>      $total ,
            'order_time'            =>      $time ,
            'order_status'          =>      'null'
     

            );


            $this->db->insert('business_order',$data); 
            
            echo "<script>alert('購買成功')</script>";
            echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
            $this->db->close();
            return;

                  

        }









           //更新訂單//
          public function updateorder(){



              $this->load->database();  
              $ordno          =   $this->input->post('ordno', TRUE);//商品總金額
              $order_total    =   $this->input->post('ordtotal', TRUE);//商品總金額
              $address        =  $this->input->post('orderaddress', TRUE);//商品送達地址
              $status         =  $this->input->post('status', TRUE);//商品總金額

             



              $data = array(

              'order_total'                    =>   $order_total,  
              'customer_address'               =>   $address,
              'order_status'                   =>   $status


              );




            $this->db->where('orders_no',  $ordno );
            $this->db->update('business_order', $data); 

            echo "<script>alert('儲存成功')</script>";
            echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation">';
            $this->db->close();
            return;


            }











            //取消訂單
            public function  ccancel_order(){



               $this->load->database();  

               $cid =  $this->input->get('cid');

               $query = $this->db->where('orders_no',$cid)->get('business_order');

                 if ($query->num_rows() > 0){

                          $row = $query->row();
                         
                  if(    $row->order_status == "完成交易"     ){

      
                      echo  "<script>alert('無法取消')</script>";
                      echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index">';
                      $this->db->close();
                      return;


                  }else{

                     $this->db->where('orders_no',  $cid );
                     $this->db->delete('business_order'); 
                      echo  "<script>alert('取消成功')</script>";
                      echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index">';
                          $this->db->close();
                      return;


                  }


              

  
                }

            }






























          //銷貨資料//
          public function commodity_sales(){

          $this->load->database(); 

          $cid   =   htmlspecialchars(addslashes($this->input->get('cid'))) ;
          date_default_timezone_set('Asia/Taipei');
          $time   =  date('Y-m-d H:i:s');
          $query = $this->db->where('orders_no', $cid )->get('business_order');

          foreach ($query->result() as $row){


              $row->customer_id;//訂購帳號
              $row->customer_name;//訂購姓名
              $row->orders_no;//訂購編號
              $row->commodity_id;//產品編號
              $row->commodity_name;//商品名稱
              $row->commodity_price;//訂購單價
              $row->order_quantity;//訂購數量
              $row->order_total;//訂購總金額 


            $data = array(
    
                    'customer_id'       =>  $row->customer_id ,
                    'customer_name'     =>  $row->customer_name ,
                    'orders_no'         =>  $row->orders_no ,
                    'commodity_name'    =>  $row->commodity_name ,
                    'commodity_id'      =>  $row->commodity_id ,
                    'order_quantity'    =>  $row->order_quantity ,
                    'commodity_price'   =>  $row->commodity_price ,
                    'order_total'       =>  $row->order_total ,
                    'sales_total'       =>  $row->order_total ,
                    'sales_make_money'  =>  $row->order_total ,
                    'sales_time'        =>  $time ,
                    'sales_status'      =>  'SALES_PASS'


            );

            $this->db->insert('business_sales', $data);


            $data = array(
              
               'order_status' => '完成交易',
        
            );

            $this->db->where('orders_no', $cid);
            $this->db->update('business_order', $data); 
            echo "<script>alert('銷貨成功')</script>";
            echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation">';
            $this->db->close();
            return;
 

          } 

























          }




          //喜歡數
          public function like(){


          define(likenumber, 1);  //定義數  

          $cid  =  htmlentities($this->input->get('cid'));

          $customer_id = base64_decode( $_COOKIE["customer_id"] );

          

          $this->load->database();  
        

          $query = $this->db->query(" SELECT * FROM  business_like where customer_id  =  '$customer_id' ");


          foreach ($query->result_array() as $row){
        
              

             if ( $row['commodity_id'] ==  $cid ){

              
              echo "<script>alert('請勿重複洗頻')</script>";
              echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
              return;

             }


          }




          $query = $this->db->where('commodity_id', $cid)->get('business_commodity');

          $row = $query->row();

          $like =  $row->commodity_like_number + likenumber;//資料庫喜歡數數



                if(  $customer_id == NULL ){

                

                echo "<script>alert('請先登入會員')</script>";
                echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
                return;


                }else{

                        $data = array(

                         'commodity_like_number'   =>   $like ,  

                        );


                          $this->db->where('commodity_id', $cid );
                          $this->db->update('business_commodity', $data);     

                        $data = array(

                         'commodity_id'    =>   $cid ,  
                         'customer_id'     =>   base64_decode( $_COOKIE["customer_id"] ) ,
                         'customer_name'   =>   base64_decode( $_COOKIE["customer_name"] ),
                         'likes'           =>   1,
                        );  

                          $this->db->insert('business_like', $data);

                           echo "<script>alert('感謝喜歡')</script>";
                           echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
               
                          return;

                }










          }















}







      //判別該使用的函數
      if( $_GET['value'] == 'insertclass' ) {
          


        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->insertclass();

        return;




          
      }elseif( $_GET['value'] == 'insertcommodity' ){


        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->insertcommodity();

        return;





      }elseif($_GET['value'] == 'order'){
        


        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->order();

       
        return;



      }elseif( $_GET['value'] == 'updateorder' ){





        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->updateorder();

       
        return;




      }elseif( $_GET['value'] == 'updateproduct'){


        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->updateproduct();
 

        return;

 


      }elseif ( $_GET['value'] == 'deleteproduct') {
          # code...
      
      
        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->deleteproduct();
  

        return;



      }elseif ( $_GET['value'] == 'commodity_sales'){

    
        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->commodity_sales();
  

        exit;



      }elseif( $_GET['value'] == 'like' ){



        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->like();

        exit;

      }elseif( $_GET['value'] == 'ccancel_order'){


        $Setproductinformation = new Setproductinformation;

        $Setproductinformation->ccancel_order();

        return;



      }else{


        echo '無使用權限請登入後再使用';
        echo '<meta http-equiv="refresh" content="3;url=http://10.11.186.21/center/index.php/Company/Web/"/>'; 
        exit;

      }


?>

































































































      /*
      // 設置資料類型 json，編碼格式 utf-8
      header('Content-Type: application/json; charset=UTF-8');
      // 定義一個二維陣列來儲存員工資料，每筆員工資料為一個陣列

      $_GET['number'];
      $staff = array(
                  array('number' => '123', 'names' => "王一傑", 'sex' => '男'),
                  array('number' => '1020502', 'names' => "王二傑", 'sex' => '男'),
                  array('number' => '1020503', 'names' => "王三傑", 'sex' => '男')
              );
      // 判斷如果是 GET 請求，則進行搜尋；如果是 POST 請求，則進行新建
      // $_SERVER['REQUEST_METHOD'] 返回訪問頁面使用的請求方法


      if  ($_SERVER['REQUEST_METHOD'] == "GET") {

          
          search($staff);


      } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {


          create();
      }
      // 通過員工編號搜尋
      function search( $staff ) {


          // 檢查是否有員工編號的參數
          // isset() 方法檢測變數是否設置；empty() 方法判斷值是否為空
          // 超全域變數 $_GET 和 $_POST 用於收集表單資料

          if (!isset($_GET['number']) ||  empty($_GET['number'])) {

          	
              echo json_encode( array( 'msg' => '沒有輸入員工編號！') );
       
              return;
          }


          // 搜尋員工編號
          for ($i = 0, $len = count($staff); $i < $len; $i++) {

              // 如果存在，儲存對應的陣列

              if ( $staff[$i]['number'] == $_GET['number'] ) {

                  $result = $staff[$i];

              }

          }
       
          // 將陣列編碼成 JSON 字串

         echo isset( $result ) ? json_encode( $result ) : json_encode( array('msg' => '沒有該員工！') );

      }
       
      // 新建員工
      function create() {
          // 如果員工資料未填寫完全
          if (!isset($_POST['number']) || empty($_POST['number']) ||
              !isset($_POST['name']) || empty($_POST['name']) ||
              !isset($_POST['sex']) || empty($_POST['sex'])) {
              echo json_encode(array('msg' => '員工資料未填寫完全！'));
       
              return;
          }
       
          // 可將獲取的 POST 表單資料，儲存到資料庫（該部分未實作）
       
          // 儲存成功，返回員工姓名
          echo json_encode(array('name' => $_POST['name']));
      }
      */