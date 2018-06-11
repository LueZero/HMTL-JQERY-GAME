	<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');





class Enterdata extends CI_Model{
	



	//自動生成建立系統表 
	public function __construct(){

    parent::__construct();

	 


  	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' or "Linux" ) 

	{ }else{ echo '請在WINDOS或LINUX底下開始作業';}


	
	if(version_compare( phpversion() , '5.1.0', '>=')){ 


	echo  '<script>alert("開始設定")</script>'; 



	}else {   
		

    echo  'PHP版本不符合5.0以上，請確實更新最新版本';

    echo  '<meta http-equiv="refresh" content="3;url=http://10.11.186.21/center/index.php/"/>';
	
	}










		$id = $_POST['id'];
		$pw = $_POST['pw'];
		$email = $_POST['email'];
		$company = $_POST['company'];
		$data = 'userdata';
		$time = date('Y-m-d-h-i-s', strtotime('+1 week')) ."\n";	
		$ip =  $_SERVER["REMOTE_ADDR"];	
		
		





		
				
	if( $id == null &&  $pw==null ){

	 echo '<script>alert("帳號確實填寫")</script>';
	 echo  '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/"/>';
	 exit;
	
	}





	$this->load->database();
   			

				//公司資料庫設定資料
				$sql = "CREATE TABLE basicinformation(
					no INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
					company VARCHAR(30) ,
					id VARCHAR(10) ,
					pw VARCHAR(10) ,
					email VARCHAR(50) ,
					authority INT(9) ,
					ip VARCHAR(50) ,
					success  VARCHAR(50) ,
					cookie VARCHAR(100) ,
					time datetime)";	
					$this->db->query($sql);		



				//員工資料
				$sql = "CREATE TABLE employeeinformation(
					no INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,  
					employeeid  VARCHAR(10) ,
					emplopasswd VARCHAR(10) ,
					name		VARCHAR(50) ,
					gender 		VARCHAR(5) ,
					address 	VARCHAR(50) ,
					identity 	VARCHAR(10) ,
					birthtime  	date,
					telphone 	VARCHAR(10) ,
					telphonetwo VARCHAR(10) ,
					email  		VARCHAR(50) ,
					maxschool 	VARCHAR(500) ,
					expertise 	VARCHAR(500) ,
					language	VARCHAR(500) ,
					workingday  VARCHAR(50) ,
					success   	date ,
					departuredate date ,
					authority 	VARCHAR(10)
					)";				
					$this->db->query($sql);			

				//商品資料		
				$sql = "CREATE TABLE business_commodity(

							no INT(14) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  /*編號*/
							commodity_id varchar(500) , /*商品id*/
							commodity_name VARCHAR(500) NOT NULL,/*商品名稱*/
							commodity_content  text NOT NULL,/*商品內容*/
							commodity_price VARCHAR(500) NOT NULL,/*商品價格*/
							commodity_quantity INT(14) ,/*商品數量*/
							commodity_total  INT(14) ,/*商品總金額*/
							commodity_size  VARCHAR(500) ,/*商品尺寸*/
							commodity_unit  VARCHAR(500) ,/*商品單位*/
							commodity_classification VARCHAR(500) ,/*商品分類*/
							commodity_added_time datetime ,/*商品上架時間*/
							commodity_of_time  datetime ,/*商品下架時間*/
							commodity_extant varchar(500) , /*商品存貨*/
							commodity_keywords text ,  /*商品關鍵字*/
							commodity_keywordstwo text , /*商品關鍵字2*/
							commodity_url text, /*商品id*/
							commodity_click_number INT(13),
							commodity_like_number INT(13)
							)";		

				$this->db->query($sql);				
				//商品照片		
				$sql = "CREATE TABLE business_commodity_imgs(

							no INT(14) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  /*編號*/
							commodity_id VARCHAR(500) ,/*商品名稱*/
							commodity_name varchar(500) ,/*商品照片1*/
							commodity_imgs text /*商品照片2*/
							
				)";		

				$this->db->query($sql);				

               	//商品分類		
				$sql = "CREATE TABLE business_classification(
							no INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  /*編號*/
							classification_commodity_id VARCHAR(500) ,/*商品編號*/
							classification_name  varchar(500) ,/*分類產品*/
							classification_title text ,/*分類名稱*/
							classification_url text /*分類url*/
							)";				
				$this->db->query($sql);				

				//顧客資訊			
				$sql = "CREATE TABLE customer_users(

							no INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, /*編號*/
							customer_id VARCHAR(100) , /*帳號*/
							customer_name VARCHAR(5) , /*姓名*/
							customer_password 	VARCHAR(15) , /*密碼*/
							customer_tel 		varchar(10) , /*電話*/
							customer_address VARCHAR(100) ,  /*住址*/
							customer_email   VARCHAR(100) ,  /*信箱*/
							customer_verification int(11) , /*驗證碼*/
							customer_bid_time datetime /*上線時間*/

							)";				



			 	$this->db->query($sql);	

		
				//訂單資訊			
				$sql = "CREATE TABLE business_order(
							orders_no INT(13) UNSIGNED AUTO_INCREMENT PRIMARY KEY , /*編號*/
							commodity_id 		VARCHAR(100) , /*商品編號*/
							commodity_name 		VARCHAR(100) , /*價格*/
							commodity_price 	int(13) , /*價格*/
							customer_id 		VARCHAR(100) , /*帳號*/
							customer_name   	VARCHAR(5) , /*姓名*/
							customer_address 	VARCHAR(15) , /*密碼*/
							customer_tel 		INT(8) , /*電話*/
							customer_email   	VARCHAR(100) ,  /*信箱*/
							order_quantity 		int(13) , /*數量*/
							order_total	   		int(13) , /*總金額*/
							order_time      	datetime , /*總金額*/
							order_status		VARCHAR(100)  /*狀態*/
							)";				

			 	$this->db->query($sql);	


						


			 	//銷貨資訊			
				$sql = "CREATE TABLE business_sales(
					
							customer_id 		VARCHAR(100) , 	/*帳號*/ 
							customer_name		VARCHAR(100) ,	/*使用者*/ 
							orders_no           INT(13) UNSIGNED AUTO_INCREMENT PRIMARY KEY  , /*商品編號*/
							commodity_name 		VARCHAR(100) , /*商品名稱*/
							commodity_id		VARCHAR(100) , /*商品編號*/
							order_quantity 		int(13) , /*數量*/
							commodity_price		int(13) , /*價單*/
							order_total  		int(13) , /*付款金額*/
							sales_total 		int(13) , /*銷貨賺錢*/
							sales_make_money	int(13) , /*進賺*/
							sales_time  		DATETIME ,  /*銷貨時間*/
							sales_status 		VARCHAR(500) /*狀況*/
							)";				

			 	$this->db->query($sql);	


				//喜歡數	
				$sql = "CREATE TABLE business_like(
					
							no INT(13) UNSIGNED AUTO_INCREMENT PRIMARY KEY , /*編號*/
							customer_id 		VARCHAR(100) , 	/*帳號*/ 
							commodity_id		VARCHAR(100) , /*商品編號*/
							likes				int(11)
							)";				

			 	$this->db->query($sql);	
















						if(preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$id)){	echo'請勿使用特殊符號..'; echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php"/>'; exit;}
						if(preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$pw)){	echo'請勿使用特殊符號..'; echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php"/>'; exit;}
						if(preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$company)){	echo'請勿使用特殊符號..'; echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php"/>'; exit;}
						
						
						
							$data = array(
							'company' => $company ,
							'id' => $id ,
							'pw' => $pw ,
							'email' => $email,
							'time' => $time,
							'ip' => $ip,
							'success' => 'PASS'
							);
							
							









							
				//基礎系統資料			
				$this->db->insert('basicinformation', $data); 
							
							
								$data = array(
								'name' 				=> 		$company ,
								'employeeid'	    =>		$id ,
								'emplopasswd'   	=> 		$pw ,
								'email'  			=>		$email,
								'authority'  		=>		'1128'
								);









				$this->db->insert('employeeinformation', $data); 
										
										
							
















 

							
					$tables = $this->db->list_tables();


					foreach ($tables as $table){
						
					 $table.'<br>';

					

					if( $table == "basicinformation" ){


			  	   	echo  '<script>alert("系統資料建立..")</script>';

	
					}elseif ( $table == "business_classification" ){


					echo  '<script>alert("商品資料建立..")</script>';		


					} elseif ( $table == "business_commodity") {

						
					echo  '<script>alert("會員資料建立..")</script>';	



					}elseif ( $table == "business_commodity_imgs") {



					echo  '<script>alert("網頁編輯資料設定")</script>';		


					}elseif ($table =="business_order" ){
  
					
					echo  '<script>alert("商品圖片資料設定")</script>';			


					}elseif ($table =="customer_users" ){



					
					echo  '<script>alert("訂單資料設定")</script>';			



					}elseif ($table == "employeeinformation" ) {
					


					echo  '<script>alert("設定銷貨資料..")</script>';		
					


					}elseif ($table == "business_sales"){



					echo  '<script>alert("設定喜歡資料..")</script>';			



					}elseif $table == "business_like"){


						echo  '<script>alert("設定完成..")</script>';		
						echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 

					}
				

					
					

}


 					
















					
	
}
}


?>