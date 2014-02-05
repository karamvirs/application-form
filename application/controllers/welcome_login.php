<?php 
class Welcome_login extends CI_Controller {


	public function index()
	{
		
		$this->load->view('login');
       // $this->load->view('form');
	}
	public function login()
	 {
		 
	$name=$_REQUEST['name'];
	$mobileno=  $_REQUEST['contact'];
	  
	  // echo "<pre>";
	// print_r($_REQUEST); 
    //   die;
		$this->db->select('*');
		$this-> db -> where('name = ' . "'" . $name . "'");
        $this-> db -> where('phone = ' . "'" .$mobileno . "'");
        // $this-> db -> limit(1);
           $query = $this -> db -> get('applicants');
           if($query -> num_rows() == 1)
          {
	      
	       $query = $this->db->query('SELECT * FROM applicants,applicant_edu,applicant_emp');
			  $result['row1']=$query->row_array();
			   $this->load->view('viewdata',$result);
			   return $query->row();
			 
           
			 }
			else
			{
		   echo"Mismatch,type correct?";
			}
		   } 
		 
		  }
?>
  
