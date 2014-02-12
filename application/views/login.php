 <html>
   <head>    
    <title>Login Page </title>
	</head>
	<body bgcolor="white">
	<center>
		
   
	    <div style="border:2px solid black;height:230px;width:320px;background-color:grey;margin-top:70px;border-radius:20px">
	   <form action="<?php echo base_url();?>index.php/register/register" method="post"/>
	   <h1 align="center" style="color:blue;margin-left:30px;">Login	 </h1>
        Email:- &nbsp;&nbsp;<input type="text" name="email" size="15"required> <br><br>
        Password:- <input type="password" name="password" size="15">  <br><br>
            &nbsp;&nbsp; <input type="Submit" value="Submit">  
              <div style="margin-right:40px;">   </div>
             <?php echo $this->session->flashdata('message');  ?> 
         </center>
         </div>
        </form>
        </head>
        </html>

