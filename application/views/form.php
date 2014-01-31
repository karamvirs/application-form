 <html>
<head>	
<body bgcolor="grey"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheet.css">
<form name="form1" id="form1" action="<?php echo base_url();?>index.php/welcome/form_data" method="post">

<table cellpadding="2" width="40%" bgcolor="white" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=5><b><u>APPLICATION FOR EMPLOYEMENT </u></b></font></center>
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
<td><input type="text" name="birth" id="birth" size="30"required></td>
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
<td>Year:</td><td><input type="text" name="Education[1][year]" size="5">&nbsp;<input type="text" name="Education[2][year]" size="5">&nbsp;<input type="text" name="Education[0][year]" size="5"></td>
<td>Board/Uni:</td><td><input type="text" name="Education[1][board]"  size="5">&nbsp;<input type="text" name="Education[2][board]"size="5">&nbsp;<input type="text" name="Education[0][board]" size="5"></td>
<td>Subject:</td><td><input type="text" name="Education[1][subject]" size="5">&nbsp;<input type="text" name="Education[2][subject]" size="5">&nbsp;<input type="text" name="Education[0][subject]" size="5"></td>
<td>%ge:</td><td><input type="text"size="5"name="Education[1][per]">&nbsp;<input type="text"size="5" name="Education[2][per]">&nbsp;<input type="text"size="5" name="Education[0][per]"></td>
</tr>
</tr>
   <!--previous employement details-------->

<td><b>Give Detalis OF Previous Employement</b></td>
<td>Name of Company:</td><td>
<input type="text"size="5"name="company[1][name]">&nbsp;<input type="text"size="5"name="company[2][name]">&nbsp;<input type="text"size="5"name="company[0][name]"></td>
<td>Designation:</td>
<td><input type="text" size="5"name="company[1][des]">&nbsp;<input type="text" size="5"name="company[2][des]">&nbsp;<input type="text" size="5" name="company[0][des]"></td>
<td>Salary Drawn:</td><td><input type="text" size="5"name="company[1][drawn]">&nbsp;<input type="text" size="5"name="company[2][drawn]">&nbsp;<input type="text" size="5"name="company[0][drawn]"></td>
<td>Reason for Leave:</td><td><input type="text" size="5"name="company[1][reason]">&nbsp;<input type="text" size="5"name="company[2][reason]">&nbsp;<input type="text" size="5" name="company[0][reason]"></td>


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
<tr><td>
<a href="<?php echo base_url();?>index.php/welcome/emp_getall" style="margin-left:220px;">View All</a></td></tr>
<td style="color:blue">PLEASE FILL IT COMPLETE AND ACCURATE............</td>
</table>
</form>

</center>
</body>
</head>
</html>
