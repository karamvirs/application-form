

<?php 
class Register extends CI_Controller {


	public function index()
	{
	
	}
	public function register()
	 {
		parent::__construct(); 
	$email=$_REQUEST['email'];
	$password=  $_REQUEST['password'];
	  
	  // echo "<pre>";
	// print_r($_REQUEST); 
    //   die;
		$this->db->select('*');
		$this-> db -> where('email = ' . "'" . $email . "'");
        $this-> db -> where('password = ' . "'" .$password . "'");
        // $this-> db -> limit(1);
           $query = $this -> db -> get('users');
           if($query -> num_rows() == 1)
          {
	      
			$this->load->view('form');          
			 }
			else
			{
		   echo"Mismatch,type correct?";
			}
		   } 
		 
		  }
?>
  <?php 
/*class Register extends CI_Controller {

	public function index()
	{

	
   }
  public function register()
	 {
		 
	$email=$_REQUEST['email'];
	$password=  $_REQUEST['password'];
	  
	
		$this->db->'SELECT id FROM `users` WHERE  Username = '$email' And Password = '$password'';
		
		//$this-> db -> where('email = ' . "'" . $email . "'");
      //  $this-> db -> where('password = ' . "'" .$password . "'");
      
           if($query -> num_rows() == 1)
          {
	     
			  $this->load->view('form');
			 
			 }
			else
			{
		   echo"Mismatch,type correct?";
			}
		   } 
          } */
?> 
