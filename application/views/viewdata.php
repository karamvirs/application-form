
<h1> data from database</h1>

  <body>
	<table border='2' cellspacing='1' align='center '>
		<tr>
		<th>Post</th>
	 <th>Name</th>
	 <th>F_name</th>
	 <th>Address</th>
	 <th>Birth</th>
	 <th>Experience</th>
	 <th>Contact</th>
	 <th>Email</th>
	 <th>Student Details</th>
	 <th>Previous Employement</th>
	   <th>Exp Salary</th>
	   <th>Time Period for Joining</th>
	   </tr>

	  <?php 
    
   
    ?>
        <tr>
            <td><?php echo $row1['post'] ;?></td>
            <td><?php echo $row1['name'] ;?></td>
            <td ><?php echo $row1['fathername'];?></td>
             <td ><?php echo $row1['paddress'];?></td>
              <td ><?php echo $row1['father name'];?></td>
              <td ><?php echo $row1['birth'];?></td>
               <td ><?php echo $row1['exp'];?></td>
                <td ><?php echo $row1['contact'];?></td>
                 <td ><?php echo $row1['email'];?></td>
                  <td ><?php echo $row1['Education'];?></td>
                   <td ><?php echo $row1['company'];?></td>
                    <td ><?php echo $row1['salary'];?></td>
                     <td ><?php echo $row1['period'];?></td>
               
        </tr>
        
    </table>
   </body>

		

