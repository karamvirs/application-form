<html>
<head>	
<body bgcolor="grey"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheet.css">
<form name="form1" id="form1" action="<?php echo base_url();?>index.php/update/update_data" method="post">

<table cellpadding="2" width="40%" bgcolor="white" align="center"cellspacing="2">

<tr>
<td>
<center><font size=5><b><u>APPLICATION OF EMPLOYEMENT </u></b></font></center>
</td>
</tr>
 <tr>
<tr>
<td>Post Applied for:</td>
<td><input type="text"name="post" id="post"size="30"></td>
</tr>
 
<tr>
<td>Name:</td>
<td><input type="text" name="name" id="name" size="30" ></td>
</tr>

<tr>
<td>Father Name:</td>
<td><input type="text" name="fathername" id="fathername"size="30" ></td>
</tr>
<tr>
<td>Present Address:</td>
<td><input type="text" name="paddress" id="paddress" size="30" ></td>
</tr>

<tr>
<td>Birth:</td>
<td><input type="date" name="birth" id="birth" size="30" ></td>
</tr>

<tr>
<td>Total Experience:</td>
<td><input type="text" name="exp" id="exp" size="30"></td>

</tr>
<tr>
<td>Contact No:</td>
<td><input type="text" name="contact" id="contact" size="30" "></td>
</tr>

<tr>
<td>EmailId:</td>
<td><input type="text" name="email" id="email" size="30" ></td>
</tr>
                <!--  student details    -----  -->
<td>Sounce of information about Vacancy</td>
<td><b><u>Details For Education</u></b></td>
<tr>

<td>Title Of Education</td><td><input type="text"name="title"> </td>
<td>Year Of Passing</td><td><input type="text"name="year"> </td>
<td>Percentage</td> <td><input type="text"name="per" >  </td>
</tr>
   <!--previous employement details-------->

<td><b>Give Detalis OF Previous Employement</b></td>

<td>Name of Company:</td><td>
<input type="text" name="company" ></td>

<td>Start Date:</td>
<td><input type="text" name="start" ></td>

<td>End Date:</td>
<td><input type="text" name="end" ></td>

<td>Reason for Leave:</td>
<td><input type="text" name="leave"></td>

</tr>


<tr>
<td><b> Exp Salary:</b></td>
<td><input type="text" name="salary" id="salary" size="30"></td>
</tr> 
<tr>
<td><b>Time period of joining:-</b></td>
<td><input type="text" name="period" id="period" size="30"></td>
</tr> 
<tr align="center">
<td colspan="2"><input type="submit"name="submit" id="submit" value="Submit" /></td> 
</tr>
<div style="margin-left:600px;">  <a href="<?php echo base_url();?>index.php/session/sessn">logout</a></div>
<td style="color:blue">PLEASE FILL THIS FORM  COMPLETE AND ACCURATE............</td> 
</table>
</form>
</center>
</body>
</head>
</html>

<script type="text/javascript">
function validation()
{
var b = document.form1.post.value;
if(b=="")
{
alert("Enter Applicable Post?");
document.form1.post.focus();
return false;
return true();
}
var a = document.form1.name.value;
if(a=="")
{
alert("Please Enter Your Name");
document.form1.name.focus();
return false;
return true();
}

var c = document.form1.fathername.value;
if(c=="")
{
alert("Enter Father Name?");
document.form1.fathername.focus();
return false;
return true();
}
var d = document.form1.paddress.value;
if(d=="")
{
alert("Enter permanent address?");
document.form1.paddress.focus();
return false;
return true();
}

var h = document.form1.salary.value;
if(h=="")
{
alert("Enter exp salary?");
document.form1.salary.focus();
return false;
return true();
}

var k = document.form1.exp.value;
if(k=="")
{
alert("Enter experience?");
document.form1.exp.focus();
return false;
return true();
}
var g = document.form1.contact.value;
if(g=="")
{
alert("Enter contact num?");

  return false;
return true();
}

var h = document.form1.salary.value;
if(h=="")
{
alert("Enter exp salary?");
document.form1.salary.focus();
return false;
return true();
}

var f = document.form1.email.value;
if(f=="")
{
alert("Enter email adddress?");
document.form1.email.focus();
return false;
return true();
}
var f = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
 if(email.value.match(f))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
return false;  

}  

}


</script> 





