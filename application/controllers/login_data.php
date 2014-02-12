<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_data extends CI_Controller {

	
	
	public function index()
	{
     // if($this->session->userdata( $email == "admin@yahoo.com"  && $password == "12345" )) {
		$data=array();
		$data['header']=$this->load->view('template/header',$data,true);
		$data['footer']=$this->load->view('template/footer',$data,true);
		$this ->load->view('/template/header');
		$this->load->view('login',$data);
		$this ->load->view('/template/footer');
   
    // else { redirect( 'index.php' );   }
	}
	
	}
?>
