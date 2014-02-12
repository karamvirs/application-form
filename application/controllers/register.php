<?php 
class Register extends CI_Controller {
     
     public function index()
	{
	}
	public function register()
	 {  
	 parent::__construct();
	   // echo"<pre>";
	   //  print_r($this->session->all_userdata());
       // die;
            
          $newdata = array(
          'email'     => 'admin@yahoo.com',
          'password'  => '12345');
         $this->session->set_userdata($newdata);
        $email=$_REQUEST['email'];
	    $password=  $_REQUEST['password'];
	  	$this->db->select('*');
		$this-> db -> where('email = ' . "'" . $email . "'");
        $this-> db -> where('password = ' . "'" .$password . "'");
           $query = $this -> db -> get('users');
	   
	       if($query -> num_rows() >0)
           {
            $query = $this->db->get('applicants,applicant_edu,applicant_emp');
				$result['row1']=$query->result_array();
				$this ->load->view('/template/header');
				$this->load->view('viewdata',$result);
				$this ->load->view('/template/footer');
				//echo"<pre>";
	          //  print_r($result); die();
	            return $query->result_array();
			   }
			 else
			  {
		    $this->session->set_flashdata('message', 'Invalid Login.'); 
            redirect('login_data');
           
			}
		 
			}
		 
			}
	    
	   ?> 
