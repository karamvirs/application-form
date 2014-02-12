
<html>
<head>
 <body>
<table border='2' cellspacing='1'>
	<tr>
	<th>Post</th>
	 <th>Name</th>
	 <th>F_name</th>
	 <th>Address</th>
	 <th>Birth</th>
	 <th>Experience</th>
	 <th>Contact</th>
	 <th>Email</th>
	  <th>Exp Salary</th>
	  <th>Time Period for Joining</th>
	  <th>Appli_id</th>
	 <th>Edu_title</th>
	 <th>Passing yead</th>
	 <th>%age</th>
      <th>Company</th>
	 <th>Start</th>
	 <th>End</th>
	 <th>Reason For Leave</th>
	  <th>Delete</th>
     </tr>
     <?php
       foreach ($row1 as $roe) 
	
     ?>
             <tr>
		      <td><?php echo $roe['post'] ;?></td>
			  <td><?php echo $roe['name'] ;?></td>
			  <td ><?php echo $roe['f_name'];?></td>
			  <td ><?php echo $roe['address'];?></td>
			  <td ><?php echo $roe['dob'];?></td>
			  <td ><?php echo $roe['expierence'];?></td>
			  <td ><?php echo $roe['phone'];?></td>
			  <td ><?php echo $roe['email'];?></td>
			  <td ><?php echo $roe['exp_salary'];?></td>
			  <td ><?php echo $roe['join_period'];?></td>
			  
			  <td ><?php echo $roe['applicant_id'];?></td>
			  <td ><?php echo $roe['edu_title'];?></td>
			  <td ><?php echo $roe['year_of_passing'];?></td>
			  <td ><?php echo $roe['percentage'];?></td>
			  
			  <td ><?php echo $roe['employer'];?></td>
			  <td ><?php echo $roe['emp_start_date'];?></td>
			  <td ><?php echo $roe['emp_end_date'];?></td>
			  <td ><?php echo $roe['reason_for_leaving'];?></td>
   <td>  <?php echo anchor('delete/rowdata/'. 'id', 'Delete', array('onClick' =>   "return confirm('Are you sure you want to delete?')"));?>
           </td> 
           <?php
		
           ?>
			<a href="<?php echo base_url();?>index.php/welcome_login/login">Add New Entry</a>
     </table>
   </body>
 </head>
</html>
