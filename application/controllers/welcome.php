<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
	 //$email=$this->session->userdata('email');	
	//	echo $email; die;  
	          
		$this->load->view('form');
		 }
	public function form_data()
	{
	    $applied=$_REQUEST['post'];
		$name=$_REQUEST['name'];
		$f_name=$_REQUEST['fathername'];
		$address=$_REQUEST['paddress'];
		$birth = $_REQUEST['birth'];
		$experience =$_REQUEST['exp'];
		$mobileno=  $_REQUEST['contact'];
		$email =$_REQUEST['email'];
		$expsalary=$_REQUEST['salary'];
		$period=$_REQUEST['period']; 
		
	//-----------------------------//
	     $title=$_REQUEST['title'];
         $year= $_REQUEST['year'];
         $per=$_REQUEST['per'];
         
         //------------------------//
         $employer=$_REQUEST['company'];
         $start_date=$_REQUEST['start'];
         $end_date=$_REQUEST['end'];
         $reason=$_REQUEST['leave'];
        // echo"<pre>";
        // print_r($_REQUEST);  die;
       
         	//---------value insert into database-------------//
			
			$data = array(
			
			 'post' => $applied ,
		     'name' => $name ,
		    'f_name' => $f_name ,
		    'address' => $address  ,
		    'dob' => $birth  ,
		    'expierence'=> $experience ,
		    'phone' =>$mobileno ,
		    'email' =>$email ,	    
		    'exp_salary'=> $expsalary ,
		    'join_period' =>$period
		    		    		);
           $this->db->insert('applicants', $data); 

		
           $data = array(
		
			'edu_title' => $title ,
		     'year_of_passing' => $year ,
		      'percentage' => $per 
		      );
		    $this->db->insert('applicant_edu', $data);
		      
	  
	        $data = array(
		
			'employer'=>$employer,
			 'emp_start_date' => $start_date ,
		     'emp_end_date' => $end_date ,
		      'reason_for_leaving' => $reason 
		      );
		      $this->db->insert('applicant_emp', $data);
		   
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
		  }
	
        }  
    ?>
