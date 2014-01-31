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
		//student edution information field---------//
		$education=$_REQUEST['Education'];
		$year_ary=array();
		$board_ary=array();
		$subject_ary=array();
		$per_ary=array();
		
		foreach($education as $val)
		{
			
            $year_ary[]= $val ['year'];  
			$board_ary[]= $val['board'];
			$subject_ary[]= $val['subject']; 
			$per_ary[]= $val['per']; 
		}
		$main_array=array($year_ary,$board_ary,$subject_ary,$per_ary);
		
		$a=json_encode($main_array);
	      //    echo"<pre>";
         //   print_r($main_array);
			
			
			//-----employee previous company details------//
		$previous=$_REQUEST['company'];
		$cmpny_name=array();
		$deg=array();
		$salary_drawn=array();
		$reason=array();
		
		foreach($previous as $val)
		{
			
          	$cmpny_name[]= $val ['name'];  
		     $deg[]= $val['des'];
			$salary_drawn[]= $val['drawn']; 
			$reason[]= $val['reason']; 
		
		}
		$main=array($cmpny_name,$deg,$salary_drawn,$reason);
		
		$b=json_encode($main);
		
		
		
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



	//---------value insert into database-------------//
			
			$data = array(
			
			 'post' => $applied ,
		   'name' => $name ,
		    'f_name' => $f_name ,
		   'address' => $address  ,
		    'dob' => $birth  ,
		    'expierence'=> $experience ,
		    'contact' =>$mobileno ,
		    'email' =>$email ,
		    'edu_details' =>$a,
		   'pre_emp_details'=>$b ,		    
		    'exp_salary'=> $expsalary ,
		    'join_period' =>$period
		    		    		);

		$this->db->insert('detail_table', $data); 
		}
		

		
	 
	 public function emp_getall()
	  {
		  $this->load->view('viewdata');
		   
		   $query = $this->db->query('SELECT * FROM detail_table');

        foreach ($query->result() as $row)
		
		{   
  //   echo"<pre>";
  //  print_r($query);
  //  die();
	}
   
      }  
     
     }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>