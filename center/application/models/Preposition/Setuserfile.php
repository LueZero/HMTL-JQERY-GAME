<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class  Setuserfile	 extends CI_Model{



	public function __construct(){

	$this->load->database();//自動進行連線
	set_time_limit(30);	
	$_SERVER['REQUEST_TIME'];
	date_default_timezone_set(‘Asia/Taipei’);
  	ini_set(‘error_reporting’, E_ALL | E_STRICT);
	ini_set(‘display_errors’, 1);
	ini_set(‘display_startup_errors’, 1);
    }







	//登入系統
 	function logoing(){



	$logo_id 						=		   urlencode( $this->input->post('logo_id', TRUE)  ) ;
	$logo_id_pass    				=		   htmlspecialchars($this->security->xss_clean($logo_id)) ;

	$logo_pw		 				= 		   urlencode( $this->input->post('logo_pw', TRUE)  ) ;
	$encryptionpass    				=		   htmlspecialchars($this->security->xss_clean($logo_pw)) ;



	


	if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$logo_id_pass.$encryptionpass ) ){

		echo'<script>alert("請勿使用特殊符號..")</script>'; 
		echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 
		$this->db->close();
		return;

	}



	$query = $this->db->query("SELECT * FROM customer_users where  customer_id = '$logo_id_pass' and  customer_password =  '$encryptionpass' ");



			                 	
	if ( $query->num_rows() >= 0 ){
	 


	        $row = $query->row_array();     
	                    	

		    	if(  $row['customer_password']  ===  $encryptionpass ){


		    		setcookie("customer_name", base64_encode($row['customer_name']), time()+3600,'/');
					setcookie("customer_id", base64_encode($row['customer_id']) , time()+3600,'/');          		
		     		echo "<script>alert('登入成功，正在幫你轉頁..')</script>";
		     		echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';	
					$this->db->close();	

		     	}else{



		     		echo "<script>alert('登入失敗，帳號密碼有誤')</script>";
		     		echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';	
	     	
		     	}
      
	      }       
  
	}	













	//登入退出
	function logoout(){


			setcookie("customer_id","", time()-3600,'/');		
			setcookie("customer_name","", time()-3600,'/');
			echo "<script>alert('登出成功')</script>";
			echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
			return;

	}			
















	//新增使用者
	function insertdate(){
		


	if( $_POST['id'] == null  ||  $_POST['name'] == null  || $_POST['pw2'] == null || $_POST['email'] == null || $_POST['tel'] == null || $_POST['address'] == null ){



	echo "<script>alert('申辦欄位偵測有空白，請確認重新輸入')</script>";
	echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';	
	return;



	}



    if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$_POST['id'].$_POST['name'].$_POST['pw'].$_POST['tel'].$_POST['address']) ){


	echo "<script>alert('申辦欄位偵測有特殊符號，請確認重新輸入')</script>";
	echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';	
	return;


    }



	  $id    = $this->input->post('id');


      $query = $this->db->query("SELECT * FROM customer_users where  customer_id = '$id' " );

                 	
                  if ( $query->num_rows() > 0 ){


                     $row = $query->row_array();     
               


                     	if( 	$row['customer_id'] ==  $id  ){


                     	   echo "<script>alert('此帳號已被註冊!')</script>";
                           echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
						   
						   exit();
                     	}
                  
                  }       
 

			  sleep(1);




			  if(	$this->input->post('pw') == $this->input->post('pw2') 	){
				

			  


				$userdata =array(

						"customer_id"			 => $_POST['id'],
						"customer_name"			 => $_POST['name'],
						"customer_password" 	 => $_POST['pw'],
						"customer_email"   		 => $_POST['email'],
						"customer_tel"			 => $_POST['tel'],
						"customer_address"		 => $_POST['address']

				);



				 $this->db->insert('customer_users', $userdata);


				 echo "<script>alert('註冊成功')</script>";
				 echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';

			   
			   }









	}
			
		







		

	//修改使用者
	function update_user(){



	if( $office_authority != 1128  &&  base64_decode( $_COOKIE["customer_id"] ) == null ){
 

		echo "<script> alert('無權限') </script>";
		echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';	
		return;


	}else{

		

	}




	$key =  $this->input->get('key');



	if(  $_POST['userid'] == null  ||  $_POST['username'] == null  || $_POST['userpw'] == null || $_POST['useremail'] == null || $_POST['usertel'] == null || $_POST['useraddress'] == null ){

	echo "<script>alert('欄位偵測有空白，請確認重新輸入')</script>";
	echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation_userdata?value='.$id.'"/>';	
	exit();

	}



    if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$_POST['userid'].$_POST['username'].$_POST['userpw'].$_POST['usertel'].$_POST['useraddress']) ){
	
	echo "<script>alert('欄位偵測有特殊符號，請確認重新輸入')</script>";
	echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation_userdata?value='.$id.'"/>';
	exit();

    }
    
 



				$userdata =array(

						"customer_id"			 => $_POST['userid'],
						"customer_name"			 => $_POST['username'],
						"customer_password" 	 => $_POST['userpw'],
						"customer_email"   		 => $_POST['useremail'],
						"customer_tel"			 => $_POST['usertel'],
						"customer_address"		 => $_POST['useraddress']

				);

				




	$this->db->where('customer_id', $key);
	$this->db->update('customer_users', $userdata); 





	if(  base64_decode( $_COOKIE["office_authority"] )  ==  1128  ){

    echo "<script>alert('修改成功')</script>";
	echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/productinformation_userdata?value='.$_POST['userid'].'"/>';
	}




	if(  base64_decode( $_COOKIE["customer_id"] ) !=   NULL  ){
 
    echo "<script>alert('修改成功')</script>";
	echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
	}




	}


























	//phpexcel
	public function excel(){



	
	require_once 'class/PHPExcel-1.8/Classes/PHPExcel.php';    					   //引入 PHPExcel 物件庫
	require_once 'class/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';  			   //引入 PHPExcel_IOFactory 物件庫
	$objPHPExcel = new PHPExcel();  //實體化Excel
	//----------內容-----------//
	//$name = iconv("UTF-8",'BIG5', $name);
	ob_end_clean() ;
	header("Content-Type:text/html; charset=utf-8");	
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Length: ' . filesize($path_to_file . '.xlsx'));
	header('Content-Disposition: attachment;filename=銷貨表.xls');
	header('Cache-Control: max-age=0');
	readfile($path_to_file . '.xlsx');

	header("Connection: close");
	//$objWriter->save('php://output');
	 $objPHPExcel = new PHPExcel();                     //实例化一个PHPExcel()对象
	 $objSheet = $objPHPExcel->getActiveSheet();        //选取当前的sheet对象
	 $objSheet->setTitle('銷貨表');                      //对当前sheet对象命名
	 $objPHPExcel->setActiveSheetIndex(0)->setCellValue( 'A1', '訂購者' )->setCellValue( 'B1', '訂購編號' )->setCellValue( 'C1', '訂購產品' )->setCellValue( 'D1', '產品編號' )->setCellValue( 'E1', '銷貨時間' );
	 //常规方式：利用setCellValue()填充数据
	 //$objSheet->setCellValue("A1","张三");   //利用setCellValues()填充数据
	 //取巧模式：利用fromArray()填充数据
	 //$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	 //$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);欄位寬

	$array = array(	"");	

	$query = $this->db->query("SELECT * FROM business_sales ORDER BY sales_time DESC");

	foreach ($query->result_array() as $row){  
		
		$message = array($row['customer_name'],$row['orders_no'],$row['commodity_name'],$row['commodity_id'],$row['sales_time']);

		array_push( $array , $message);//注意返回值为新的数组元素的个数

	}

	$objPHPExcel->getDefaultStyle()->getFont()->setName( 'Arial');  
	$objPHPExcel->getDefaultStyle()->getFont()->setSize(22);  
	$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$objPHPExcel->getActiveSheet()->getStyle('B2:B200')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	//同時設定多個欄位 水平置中
	//樣式

	$objSheet->fromArray( $array );  //利用fromArray()直接一次性填充数据
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->setPreCalculateFormulas(false);
	$objWriter->save('php://output');
	echo "hello";
	exit;


	}










































	//聊天寫入
	public function talk(){


		$this->input->post('data');

		$this->input->post('emoji')[2][0];


		$userdata =array(


			"emjjo"		  => $this->input->post('emoji')[2][0],
			"message"	  => htmlentities(nl2br($this->input->post('data'))),
						

		);



		print_r( array(  $this->input->post('em')[2][0], $this->input->post('data')  )  );

		$this->db->insert('message_board', $userdata);

		$this->db->close();

	}










	//會員聊天狀況
	public function monitor(){


    	$query = $this->db->query("SELECT * FROM message_board ORDER BY no DESC");

		foreach ($query->result() as $row){  
		echo "<tr>";	
    	echo '<th style="font-size:25px;">'.$row->emjjo.'</th>';
    	echo '<th style="font-size:25px;">'.$row->message.'</th>';	
  		echo "</tr>";
		}



	}








}














$customer_id = base64_decode( $_COOKIE["customer_id"] );
//新增使用者
if ( $_GET['value'] == 'insertdate' ) {
	
	$Setuserfil	 = new Setuserfile;
	$Setuserfil->insertdate();
	return;

//會員登入
} elseif ( $_GET['value'] == 'Client_logoing' &&  $customer_id == NULL) {
	

	$Setuserfil	 = new Setuserfile;
	$Setuserfil->logoing();
	return;

//會員登出
} elseif ( $_GET['value'] == 'Client_logoout') {


	$Setuserfil	 = new Setuserfile;
	$Setuserfil->logoout();
	return;

//更新使用者
} elseif( $_GET['value'] == 'update_users'){


	$Setuserfil	 = new Setuserfile;
	$Setuserfil->update_user();
	return;


} elseif( $_GET['value'] == 'talk') {

	//聊天資料寫入
	$Setuserfil = new Setuserfile;
	$Setuserfil->talk();



}elseif( $_GET['value'] == 'monitor'){

	//監控
	$Setuserfil = new Setuserfile;
	$Setuserfil->monitor();




}elseif( $_GET['value'] == 'excel'){


	$Setuserfil = new Setuserfile;
	$Setuserfil->excel();


}else{


echo '<script>alert("請正常使用網站")</script>';
return;

}









?>