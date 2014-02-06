<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_data extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$data=array();
		$data["header"]=$this->load->view('template/header',$data,true);
		$data["footer"]=$this->load->view('template/footer',$data,true);
		$this->load->view('login',$data);
	}
	public function login_fun()
	{
			 $email=$_REQUEST['email'];
			 $password= md5($_REQUEST['password']);
			 
				//---------value insert into database-------------//
				
			$data = array(
			 'email' => $email ,
			 'password' => $password 
				
				 );
		   $this->db->insert('users', $data);
		  }
	 
	
	
   
      }  
     
     

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>
