<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);
class Setmemberprofile extends CI_Model{



	//登入系統
	public function logoing(){

			$id = $this->input->post('id');
			$pw = $this->input->post('pw');

		
				
			if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" , $id .$pw )   ){	
					
				echo'請勿使用特殊符號..';
				echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 
				return;
			}


			if( $id == null &&  $pw == null){	

				echo "<script>alert('欄位請勿空白')</script>";
				echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>'; 
				return;
			}
					

			$this->load->database();	
		


			

			$query = $this->db->get();
		



			$query = $this->db->query("SELECT * FROM employeeinformation where employeeid = '$id' ");

			if ( $query->num_rows() > 0 ){
				$row = $query->row_array(); 
				$row['employeeid'];
				$row['emplopasswd'];
				$row['name'];
			}
					
					
		
	
					
			if( $row['employeeid'] == $id && $row['emplopasswd'] == $pw){


				setcookie("office_name", base64_encode($row['name']), time()+3600,'/');
				setcookie("office_id", base64_encode($row['employeeid']) , time()+3600,'/');
				setcookie("office_authority", base64_encode($row['authority']) , time()+3600,'/');
				echo'<script>alert("登入成功")</script>';
				echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
				exit;
				}else{
				echo'<script>alert("登入失敗")</script>';
				echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
				exit();

			}
	}
			
			
			
	//登入退出
	public function logout(){
		
			setcookie("office_name","", time()-3600,'/');		
			setcookie("office_id","", time()-3600,'/');
			setcookie("office_authority","", time()-3600,'/');	
			echo'<script>alert("登出成功")</script>';
			echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';	

	}
			
			
			
			
			
	//新增使用者
	public function insertdate(){
				
				
			if( NULL	==  $_POST['name']  and NULL	== $_POST['employeeid']  and NULL	== $_POST['emplopasswd'] ){
				
			echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/memberprofile"/>';
			show_error('不能空白，正在返回頁面');
			
			}	
				
			
		
			if( preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/" , $_POST['name'] . $_POST['employeeid']  .  $_POST['emplopasswd'] ) ) {	
			echo'<script>alert("請勿使用特殊符號")</script>';
			echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Webindex" />';
			exit;
			}
			
			$id = $_POST['employeeid'];		
			$this->load->database();
			$query = $this->db->query("SELECT * FROM employeeinformation where employeeid='$id'");		
			$row = $query->row_array(); 

			
			if($row['employeeid'] == $id ){	
			echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/memberprofile" />';
			show_error('此ID已註冊過，正在返回頁面');
			exit;	
			}
						
			
			$data = array(
			
					'name' 				=> 		$_POST['name'] ,
					'employeeid'	    =>		$_POST['employeeid'] ,
					'emplopasswd'     	=> 		$_POST['emplopasswd'],
					'email'  			=>		$_POST['email']
			);

			$this->db->insert('employeeinformation', $data); 
			echo'<script>alert("新增成功")</script>';
			echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/memberprofile"/>';
			
			
	}
			
			
			
	//修改使用者資料
	public function updates(){
		
				$this->load->database();

					$data = array(
					'name' 						=> 		$_POST['name'] ,
					'employeeid'	   			=>		$_POST['employeeid'] ,
					'emplopasswd'  	        	=> 		$_POST['emplopasswd'],
					'gender'			  		=>		$_POST['gender'],
					'birthtime'			 	  	=>		$_POST['birthtime'],
					'address'			  	 	=>		$_POST['address'],
					'telphone'			 		=>		$_POST['telphone'],
					'telphonetwo'			 	=>		$_POST['telphonetwo'],
					'identity'			 		=>		$_POST['identity'],
					'email'				  	    =>		$_POST['email'],
					'maxschool'			  	    =>		$_POST['maxschool'],
					'expertise'			  	    =>		$_POST['expertise'],
					'language'					=>		$_POST['language'],
					'workingday'				=>		$_POST['workingday'],
					'departuredate'		    	=>		$_POST['departuredate']	
					);
					$this->db->where('employeeid', $_POST['employeeid']);					
					$this->db->update("employeeinformation",$data);
					echo'<script>alert("修改成功")</script>';
					echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/memberprofile"/>';
	 }


	//刪除使用者資料
	public function delete()	{

					$this->load->database();
					$this->db->delete('employeeinformation', array('employeeid' => $_GET['name']) );
					echo'<script>alert("刪除成功")</script>';
					echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/memberprofile"/>';
	 }




}


					//判別該使用的函數
					if($_GET['value'] =='insert') {
						
					$Setmemberprofile = new Setmemberprofile;
					$Setmemberprofile->insertdate();

					} elseif ($_GET['value']=='update') {
						
					$Setmemberprofile = new Setmemberprofile;
					$Setmemberprofile->updates();

					} elseif ($_GET['value']=='delete') {


					$Setmemberprofile = new Setmemberprofile;
					$Setmemberprofile->delete();

					} elseif ( $_GET['value']=='logoing' ) {

					$Setmemberprofile = new Setmemberprofile;
					$Setmemberprofile->logoing();
						
					} elseif ( $_GET['value']=='logout' ){
						
					$Setmemberprofile = new Setmemberprofile;
					$Setmemberprofile->logout();
						
					}else{
					echo'<script>alert("無使用權限請登入後再使用")</script>';
					echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index" />'; 
					}







?>