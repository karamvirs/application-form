<?php 
class Session extends CI_Controller {


	public function index()
	{
		parent::__construct();
		
      
	}
	public function sessn()
	 {
	
    $this->session->sess_destroy( $ssn_data);             
    redirect(base_url().'index.php/login_data'); 
                  
       //  $this->load->view('/template/header');
       //  $this->load->view('login');
       //  $this->load->view('/template/footer');
   
   
     } 
	 }
?>
