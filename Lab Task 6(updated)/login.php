<!DOCTYPE HTML>  
<html>
  <head >
  <title>LOGIN</title>
    </head >
    <body> 
		      <br><i> <h1 align="center" style="color: blue">  LEARNING CS </i> </h1> 
		      <h3 align= "right">
			 
			  
		      <a href="home page.php">Home |  </a> 
		      <a href="login.php">Login |  </a>  
		      <a href="registration.php">Registration </a>
			  <hr>
		      </h3>  	
    <?php       
  
 
    ?>        
		  <h3 align="center">
		  <legend> <h2> <b>LOGIN</b></h2></legend><br>
          <form action="controller/loginController.php" method="POST" enctype="multipart/form-data"> 
		  
		  
		       <b> <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" ><br><br>
			   
			  
			    <b> <label for="password"> Password : </label> </b>
                <input type="password" name="password" ><br><br>
                <hr>
				
				
                <input type="checkbox" name="Remember me"> Remember Me <br><br>
                <input type="submit" name="submit" value="Submit"> 				
				<a href="forgotPassword.php">Forgot Password?</a>
                
			</h3>	
				
							    
		   <div align="center">
		   <hr>
		   
		   
		   <p> <span style="color: rgb(140, 140, 140);"> Copyright ©   <?php echo date(2021);?> <span/> </p>
		    
			
		   </div>
 		
         </form> <br><br>
				
  
	 
 </body>
</html>