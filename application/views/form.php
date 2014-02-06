 <html>
<head>	
<body bgcolor="grey"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheet.css">
<form name="form1" id="form1" action="<?php echo base_url();?>index.php/welcome/form_data" method="post">

<table cellpadding="2" width="40%" bgcolor="white" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=5><b><u>APPLICATION OF EMPLOYEMENT </u></b></font></center>
</td>
</tr>
 
 <tr>
<td>Post Applied for:</td>
<td><input type="text"name="post"size="30"required></td>
</tr>
 
<tr>
<td>Name:</td>
<td><input type="text" name="name" id="name" size="30"required></td>
</tr>

<tr>
<td>Father Name:</td>
<td><input type="text" name="fathername" id="fathername"size="30"required></td>
</tr>
<tr>
<td>Present Address:</td>
<td><input type="text" name="paddress" id="paddress" size="30"required></td>
</tr>

<tr>
<td>Birth:</td>
<td><input type="date" name="birth" id="birth" size="30" value="yyyy-dd-mm"required></td>
</tr>

<tr>
<td>Total Experience:</td>
<td><input type="text" name="exp" id="exp" size="30"required></td>

</tr>
<tr>
<td>Contact No:</td>
<td><input type="text" name="contact" id="contact" size="30"required></td>
</tr>

<tr>
<td>EmailId:</td>
<td><input type="text" name="email" id="email" size="30"required></td>
</tr>
                <!--  student details    -----  -->
<td>Sounce of information about Vacancy</td>
<td><b><u>Details For Education</u></b></td>
<tr>
<td>Applicant ID</td><td><input type="text"name="appli"> </td>
<td>Title Of Education</td><td><input type="text"name="title"> </td>
<td>Year Of Passing</td><td><input type="text"name="year"> </td>
<td>Percentage</td> <td><input type="text"name="per">  </td>
</tr>
   <!--previous employement details-------->

<td><b>Give Detalis OF Previous Employement</b></td>

<td>Name of Company:</td><td>
<input type="text" name="company"></td>

<td>Start Date:</td>
<td><input type="text" name="start" value="yyyy-dd-mm"></td>

<td>End Date:</td>
<td><input type="text" name="end" value="yyyy-dd-mm"></td>

<td>Reason for Leave:</td>
<td><input type="text" name="leave"</td>

</tr>


<tr>
<td><b> Exp Salary:</b></td>
<td><input type="text" name="salary" id="salary" size="30"required></td>
</tr> 
<tr>
<td><b>Time period of joining:-</b></td>
<td><input type="text" name="period" id="period" size="30"required></td>
</tr> 
<tr align="center">
<td colspan="2"><input type="submit"name="submit" value="Submit" /></td> 
</tr>

<!--<td>
<a href="<?php echo base_url();?>index.php/login_data/emp_getall" style="margin-left:220px;">View All</a></td></tr>
<td style="color:blue">PLEASE FILL IT COMPLETE AND ACCURATE............</td> -->
</table>
</form>

</center>
</body>
</head>
</html>
