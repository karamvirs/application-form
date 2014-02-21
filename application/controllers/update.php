<?php 
class Update extends CI_Controller {


	public function index()
	{
      
      parent::__construct();
		
     }
          $this ->load->view('/template/header');
		  $this->load->view('update_view');
		  $this ->load->view('/template/footer');
	public function update_data($userid)
	{
	
	    
		 
	  // echo $userid; die;
	 //post all values  //
	   $data = array (
            'post' => $this->input->post('post'),
            'name' => $this->input->post('name'),  
	        'f_name' => $this->input->post('fathername'),
            'address' => $this->input->post('paddress'),
	         'dob' => $this->input->post('birth'),
            'expierence' => $this->input->post('exp'),  
	         'phone' => $this->input->post('contact'),
            'email' => $this->input->post('email'),
	         'exp_salary' => $this->input->post('salary'),
            'join_period' => $this->input->post('period')
	        
	       /*   'edu_title' => $this->input->post('title'),
              'year_of_passing' => $this->input->post('year'),  
	        'percentage' => $this->input->post('per'),
            
         /*   'employer' => $this->input->post('company'),    
            'emp_start_date' => $this->input->post('start'),
              'emp_end_date' => $this->input->post('end'),  
	        'reason_for_leaving' => $this->input->post('leave') */
                     );
                       
        $this->db->where('user_id',4);
        $this->db->update('applicants', $data);
        
       // echo"<pre>";  print_r($data); die;
		 
	
	}
    }
     
    ?>
