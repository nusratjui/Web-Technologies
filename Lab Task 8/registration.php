  <?php session_start(); ?> 
<!DOCTYPE html> 
<html>
  <head >
  <title>REGISTRATION</title>
   <?php require_once 'js/js-registration.php'; ?>
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
	  
	  
	  <?php



 if(!isset($_SESSION['nameEr']))
 {
   $_SESSION['nameEr']="";
 }

 if(!isset($_SESSION['passwordEr']))
 {
   $_SESSION['passwordEr']="";
 }
 
 if(!isset($_SESSION['usernameErr']))
 {
   $_SESSION['usernameErr']="";
 }
  if(!isset($_SESSION['emailErr']))
 {
   $_SESSION['emailErr']="";
 }
  if(!isset($_SESSION['contactnoErr']))
 {
   $_SESSION['contactnoErr']="";
 }
  if(!isset($_SESSION['cpasswordErr']))
 {
   $_SESSION['cpasswordErr']="";
 }

 $name=$username=$password=$email=$contactno=$confirmpassword="";

  ?>    
          
                           
                <form action="controller/registrationController.php" method="POST" enctype="multipart/form-data" onsubmit="validateform()">
				
                     <h3 align="center">
					 
                     <legend><h2><b>REGISTRTION </h2></b></legend>					                    
                     <br><br> 
					  <label>Username <span style="color: rgb(255, 255, 255);"> ******** </span>:</label>  
                     <input type="text" name="username" id="username" onkeyup="checkUserName()" onblur="checkUserName()">
                      <span id="usernameErr" ></span> 
					 <span  style="color: #ff0000">* <?php echo $_SESSION['usernameErr'];?></span>
					 
					 
					 <br><br> 
					 
					 <label>Password <span style="color: rgb(255, 255, 255);"> ******** </span>:</label>  
                     <input type="password" name="password" id="password"  onkeyup="checkPass()" onblur="checkPass()">
                      <span id="passErr" ></span> 
					 <span  style="color: #ff0000">* <?php echo $_SESSION['passwordEr'];?></span>
					 <br><br>	
					 
					 
					 <label>Confirm Password <span style="color: rgb(255, 255, 255);"> * </span>:</label>  
                     <input type="password" name="confirmpassword" id="confirmpassword"  onkeyup="checkConfirmpassword()" onblur="checkConfirmpassword()"> <span id="confirmpasswordErr" ></span>
					 <span  style="color: #ff0000">* <?php echo $_SESSION['cpasswordErr'];?></span>
					
					
                     <br><br>	
                     <label>Name <span style="color: rgb(255, 255, 255);"> *********** </span> :</label>  
                     <input type="text" name="name"  id="name" onkeyup="checkName()" onblur="checkName()">
                      <span id="nameErr" ></span>
					  <span  style="color: #ff0000">* <?php echo $_SESSION['nameEr'];?></span>
                      
					 
					 <br><br>
					 
                     <label>Email <span style="color: rgb(255, 255, 255);"> *********** </span>:</label>  
                     <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()">
                     <span id="emailErr" ></span>
					 <span  style="color: #ff0000">* <?php echo $_SESSION['emailErr'];?></span>
					
					 
				     <br><br>
					 
              
					 <label>ContactNo<span style="color: rgb(255, 255, 255);"> ******* </span>:</label>  
                     <input type="text" name="contactno" id="contactno" onkeyup="checkContactno()" onblur="checkContactno()">
                      <span id="contactnoErr" ></span> 
					 <span  style="color: #ff0000">* <?php echo $_SESSION['contactnoErr'];?></span>
					
					 <hr>
					 
					  <input type="submit" name="submit" value="Submit" class="btn btn-info"/>   
					  <input type="reset" value="Reset" value="Reset">
					  <hr><br>
					  </h3>	
						
		             <div align="center">
		             
		             <p> <span style="color: rgb(140, 140, 140);"> Copyrightn © <?php echo date(2021);?> <span/> </p>
		     
		             </div>
					   
                </form>  
            
           <br />  
      </body>  
 </html>  
 <?php
if(isset($_SESSION['passwordEr']) || isset($_SESSION['passwordEr']))
 {
 session_destroy();
 }

  ?>