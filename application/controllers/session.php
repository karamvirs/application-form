<?php 
class Session extends CI_Controller {


	public function index()
	{
		parent::__construct();
		
      
	}
	public function sessn()
	 {
		  
	           $newdata = array(
                'email'  =>'admin@yahoo.com',
                'password' => '12345'
                );
                $this->session->sess_destroy($newdata);
    
    // $this->session->set_flashdata('message', 'This is a message.');
    // print_r($this->session->flashdata('message')); 
     
         $this->load->view('/template/header');
         $this->load->view('login');
         $this->load->view('/template/footer');
   //  redirect('index.php');
    // $this ->load->view('/template/header');
	//$this->load->view('login');
	//$this ->load->view('/template/footer');
    
           
           } 
		 }
		 
		 ?>
