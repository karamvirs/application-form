<?php 
class Register extends CI_Controller {
     
     public function index()
	{
	}
	public function register()
	 {  
	 parent::__construct();
	  
	    //echo"<pre>";
	    //print_r($this->session->all_userdata());
        //die;
          /* $newdata = array(
          'email'     => 'admin@yahoo.com',
          'password'  => '12345');
			$ssn_data=$this->session->set_userdata($newdata);
             
               if(isset($ssn_data))
               {
	        redirect(base_url().'index.php/login_data'); 
	              } */  
        
          $email=$_REQUEST['email'];
	      $password=  $_REQUEST['password'];
	  	  $this->db->select('*');
		  $this-> db -> where('email = ' . "'" . $email . "'");
          $this-> db -> where('password = ' . "'" .$password . "'");
          $query = $this -> db -> get('users');
	       if($query -> num_rows() >0)
            {
           $row_data=$query->row_array();
           
           $id=$row_data['id'];
           $this->session->set_userdata('id',$id);
          // print_r($id);
          // die;
            $this->db->select('*');    
			$this->db->from('applicants');
			$this->db->join('applicant_edu', 'applicants.user_id = applicant_edu.applicant_id');
			$this->db->join('applicant_emp', 'applicants.user_id = applicant_emp.applicant_id');
            $query = $this->db->get();
            $result['row1']=$query->result_array();
			$this ->load->view('/template/header');
			$this->load->view('viewdata',$result);
		    $this ->load->view('/template/footer');
			return $query->result_array();
		// echo"<pre>"; print_r($result); die();
	        }
		   else
		    {         
		    $this->session->set_flashdata('message', 'Invalid Email And Password?'); 
            redirect(base_url().'index.php/login_data');

			}
		 
			}
		/*  public function add() 
			 {
			 $email=$this->input->post('email');
	      	 $password=$this->input->post('password');
			 $this->load->model('Book');
			 $this->Book->authenticate($email); 
			 }  */
				 
		  
			}
	   ?>
