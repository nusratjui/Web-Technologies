<!DOCTYPE HTML>  
<html>
  <head >
  <title>REGISTRATION</title>
    </head >
    <body> 
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			
			  
		      <a href="home page.php">Home | </a> 
		      <a href="login.php">Login | </a>  
		      <a href="registration.php">Registration </a>
			  <hr>
	          </h3> 	

<?php  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          
      </head>  
      <body>  
          
                           
                <form action="controller/registrationController.php" method="POST" enctype="multipart/form-data">
				
                     <h3 align="center">
					<legend><h2><b>REGISTRTION </h2></b></legend>					                    
                     <br><br> 
					 
                     <label>Name <span style="color: rgb(255, 255, 255);"> *********** </span> :</label>  
                     <input type="text" name="name">  
					 <br><br>
					 
                     <label>Email <span style="color: rgb(255, 255, 255);"> *********** </span>:</label>  
                     <input type="text" name="email">
				     <br><br>
					 
                     <label>Username <span style="color: rgb(255, 255, 255);"> ******** </span>:</label>  
                     <input type="text" name="username"> 
					 <br><br> 
					 
					 <label>Password <span style="color: rgb(255, 255, 255);"> ******** </span>:</label>  
                     <input type="password" name="password"> 
                     <br><br>					 
					 
					 <label>Confirm Password <span style="color: rgb(255, 255, 255);"> * </span>:</label>  
                     <input type="password" name="cpassword"> 
					 <br><br>
					 
					 <label>ContactNo<span style="color: rgb(255, 255, 255);"> ******* </span>:</label>  
                     <input type="text" name="contactno" > 
					 <hr>
					 
					  <input type="submit" name="submit" value="Submit" class="btn btn-info"/>   
					  <input type="reset" value="Reset">
					  <hr><br>
					  </h3>	
						
		             <div align="center">
		             
		             <p> <span style="color: rgb(140, 140, 140);"> Copyrightn © <?php echo date(2021);?> <span/> </p>
		     
		             </div>
					   
					  </fieldset>
                </form>  
            
           <br />  
      </body>  
 </html>  
 
 

