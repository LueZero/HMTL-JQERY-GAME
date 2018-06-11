<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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


	public function index(){

	$this->load->database();
		

	$this->load->view('index');	
	

	$tables = $this->db->list_tables();




		foreach ($tables as $table){ 

					

			if ($table==="basicinformation"){ 

				echo'<script>alert("開始使用本系統")</script>';
				echo '<meta http-equiv="refresh" content="0;url=http://10.11.186.21/center/index.php/Company/Web/index"/>';
				exit;
				}else{
						
						
				}
		}



	}



	
	public function setdata(){
		$this->load->model('Preposition/Enterdata');
	}
	

	
}



?>

