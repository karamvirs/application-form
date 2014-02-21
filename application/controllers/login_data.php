<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_data extends CI_Controller 
    {

	
	
	public function index()
	{
            $id=$this->session->userdata('id');
            if(!empty($id)){
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
            else{
		$data=array();
		$data['header']=$this->load->view('template/header',$data,true);
		$data['footer']=$this->load->view('template/footer',$data,true);
		$this ->load->view('/template/header');
		$this->load->view('login',$data);
		$this ->load->view('/template/footer');
	}
    }
	
	}
?>
