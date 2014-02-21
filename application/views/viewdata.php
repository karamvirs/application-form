
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
	 <th>Edu_title</th>
	 <th>Passing year</th>
	 <th>%age To Percentage</th>
       <th>Company</th>
	 <th>Start</th>
	 <th>End</th>
	 <th>Reason For Leave</th>
	 <th>Delete</th>
	  <th>Edit</th> 
     </tr>
     <?php
       foreach ($row1 as  $roe) {
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
			  <td ><?php echo $roe['edu_title'];?></td>
			  <td ><?php echo $roe['year_of_passing'];?></td>
			  <td ><?php echo $roe['percentage'];?></td>
			  
			   <td ><?php echo $roe['employer'];?></td>
			  <td ><?php echo $roe['emp_start_date'];?></td>
			  <td ><?php echo $roe['emp_end_date'];?></td>
			  <td ><?php echo $roe['reason_for_leaving'];?></td> 
      <td> <a onclick="return confirm_link('<?php echo $roe["user_id"] ?>');">Delete</a>  </td> 
      <td>  <a onclick="return update_btn('<?php echo $roe["user_id"] ?>');">edit</a>  </td> 
             </tr>
             
             <?php } ?>
         <div style="margin-left:600px;">  <a href="<?php echo base_url();?>index.php/session/sessn">logout</a></div>
        <a href="<?php echo base_url();?>index.php/welcome_login/login">Add New Entry</a>
      
     </table>
   </body>
 </head>
</html> 

<script type="text/javascript">
function confirm_link(user_id)
{
	
var a1=confirm('Are you sure to delete ?');
if(a1==true){
	window.location.href="<?php echo base_url();?>index.php/delete/row_data/"+user_id; 
	return false;
}
	
}
</script>  

<script type="text/javascript">
function update_btn(user_id)
{
	
var a1=confirm('Are you sure to Edit ?');
if(a1==true){
	window.location.href="<?php echo base_url();?>index.php/update/update_data/"+user_id; 
	return false;
}

}
</script>
