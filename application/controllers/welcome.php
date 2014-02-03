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
	     $applicant_id=$_REQUEST['appli'];
         $title=$_REQUEST['title'];
         $year= $_REQUEST['year'];
         $per=$_REQUEST['per'];
         
         //------------------------//
         $employer=$_REQUEST['company'];
         $start_date=$_REQUEST['start'];
         $end_date=$_REQUEST['end'];
         $reason=$_REQUEST['leave'];
         
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
			
			'applicant_id'=>$applicant_id,
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
		  }
	 
	/* public function emp_getall()
	  {
		  $this->load->view('viewdata');
		   
		   $query = $this->db->query('SELECT * FROM detail_table');

        foreach($query->result() as $row)
		
	{   */
    // echo"<pre>";
	//print_r($query->result());
   // die();
	
   
      }  
     
     

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?> 
