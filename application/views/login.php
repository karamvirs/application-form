<?php
echo $header;
?>
	
	<form action="<?php echo base_url();?>index.php/register/register" method="post"/>
	
	  <h1 align="center" style="color:blue;margin-left:30px;">Login 
	  	<img src="images/images.jpeg" width="42" height="42">  </img> </h1>
        Email:- <input type="text" name="email" size="15"required> <br><br>
        Password:- <input type="password" name="password" size="14">  <br><br>
       
        &nbsp;&nbsp; <input type="Submit" value="Submit">  
         </center>
         </div>
        </form>
   <?php
   echo $footer;
   ?>
