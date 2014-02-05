<html>
<head>    
    <title>Login Page </title>
</head>
<body bgcolor="grey">
	<center>
	<div style="border:2px solid black;height:230px;width:320px;background-color:white;margin-top:70px;">
	
	<form action="<?php echo base_url();?>index.php/welcome_login/login" method="post"/>
        <h1 align="center" style="color:blue">Login</h1>
      Username:- <input type="text" name="name" size="15"required> <br><br>
      Contact-No:- <input type="text" name="contact" size="14"> <br><br>
         &nbsp;&nbsp; <input type="Submit" value="Login" />   
         &nbsp;&nbsp; <a href="<?php echo base_url();?>index.php/register/register">Add New Entry</a>
         </center>
         
         </div>
        </form>
    </body>
</html> 
