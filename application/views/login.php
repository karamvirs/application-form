<html>
   <head>    
    <title>Login Page </title>
	</head>
	<body bgcolor="white">
	<center>

        <a href="<?php echo base_url();?>">login</a>
	    <div style="border:2px solid black;height:230px;width:320px;background-color:grey;margin-top:70px;border-radius:20px">
	   <form name="name" action="<?php echo base_url();?>index.php/register/register" method="post"/>
	   <h1 align="center" style="color:blue;margin-left:30px;">Login </h1>
        Email:- &nbsp;&nbsp;<input type="text" name="email" size="15" required"> <br><br>
        Password:- <input type="password" name="password" size="15">  <br><br>
        &nbsp;&nbsp; <input type="Submit" value="Submit">  
        <div style="margin-right:40px;">   </div>
        <?php echo $this->session->flashdata('message'); ?> 
         </center>
         </div>
        </form>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript"> 
        $(document).ready(function()
        { $("name").validate(); });
         </script>
        </head>
        </html>
