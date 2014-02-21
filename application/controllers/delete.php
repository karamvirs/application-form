<?php 
class Delete extends CI_Controller {


	public function index()
	{
     
		parent::__construct();
		
     }
	public function row_data($userid)
	 {    
		 
	 // echo $userid; die;
	 //...query for delete  data...//
	    $this->db->where('user_id', $userid);
        $this->db->delete('applicants'); 
        
        $this->db->where('applicant_id', $userid);
        $this->db->delete('applicant_edu'); 
        
        $this->db->where('applicant_id', $userid);
        $this->db->delete('applicant_emp'); 
        
       //...show  viewdata again after  delete the row data...//
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
