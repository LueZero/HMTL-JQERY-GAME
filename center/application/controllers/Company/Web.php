<?php
defined('BASEPATH') OR exit('No direct script access allowed');




class Web extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */ 



		    //首頁區
			public function index(){
			$this->load->library('pagination');


											
			$this->load->database();
			$this->load->view('starviews/company');
								
								

			}   

			




			 //後台區
			public function backstage(){
			
			

			$this->load->view('starviews/backstage');
							   
							   
			}
			
			


			//使用者區
			public function memberprofile(){				
				
			$this->load->database();			
			$this->load->view('edit/memberprofile',FALSE);

			$office_id  	=	@base64_decode( $_COOKIE['office_id'] );

			$query = $this->db->query("SELECT * FROM basicinformation  where id = '$office_id' ");


				if ($query->num_rows() > 0){

				$row = $query->row_array(); 

					
					if( $row['id'] != $office_id ){

						echo '無權使用';
						return;
					}
					
				}	

			}
			//使用者完整資訊
			public function memberprofiletable(){				

				$this->load->database();			
				$this->load->view('edit/view/memberprofiletable',FALSE);
									
			}	

			
			//商品資料
			public function productinformation(){
				
				$this->load->database();
				$this->load->view('edit/productinformation');
								
			}


			//使用者完整資訊
			public function productinformation_userdata(){
				
				$this->load->database();
				$this->load->view('edit/view/productinformation_userdata',FALSE);
								
			}

			//商品完整資訊
			public function productinformation_product(){
				
				$this->load->database();
				$this->load->view('edit/view/productinformation_product',FALSE);
								
			}





			//編輯網頁
			public function editpage(){
				
				$this->load->database();
				$this->load->view('edit/editpage');
								
			}

			//購買商品	
			public function shop(){
				
				$this->load->database();
				$this->load->view('starviews/shop');
								
			}







			////////////////////Mode區/////////////////////






			//會員系統
			public function setuserfile(){

				$this->load->model('Preposition/Setuserfile');


			}
			//員工系統
			public function setmemberprofile(){

				$this->load->model('Preposition/setmemberprofile');
			}

			//商品系統
			public function setproductinformation(){
						
				$this->load->database();
				$this->load->model('Preposition/setproductinformation');

								
			}
			




	

	
}

?>