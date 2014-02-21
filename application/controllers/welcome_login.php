<?php 
class Welcome_login extends CI_Controller {


	public function index()
	{
		parent::__construct();
		 if(isset($ssn_data)){
		redirect(base_url().'index.php/login_data'); }
      
	}
	public function login()
	 {
		 
                
		   $this->load->view('/template/header');
		   $this->load->view('form');
           $this->load->view('/template/footer');
		
		   } 
		 }
		 ?>
