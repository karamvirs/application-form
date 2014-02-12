<?php 
class Delete extends CI_Controller {


	public function index()
	{
		parent::__construct();
		
      
	}
	public function row_data($id)
	 {    
		
		$tables = array('applicant', 'applicant_edu', 'applicant_emp');
		$this->db->where('user_id', '5');
		$this->db->delete($tables);
		
   
   // $id=$_GET['id'];
   // $this->db->delete('applicant', array('user_id' => $id));
	//$this->db->delete('applicant_edu', array('applicant_id' => $id));
    //$this->db->delete('applicant_emp', array('applicant_id' => $id));
    
       }  
	    $this ->load->view('viewdata',$user_id);
		   
		 }
		  
?>
