<?php
session_start();

$s=$_SESSION['username'];

?>
<!DOCTYPE html>
<html> 
	 <head>
	 <title> DASHBOARD </title>
	 </head>  
	 <body>
	      
		    
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			  
				
		      Logged in as <?php echo $s; ?>|
		      <a href="logout.php">Logout</a> 
              <hr>			  
		      </h3>  
			 
			
		
		   <h2> <u> Account </u> </h2> <span style="color: rgb(255, 255, 255);"> ***********</span> <h1 align="center" > Welcome <?php echo $s; ?>  <h1/>
           
		   <h4>
		   
           <ul>
                <li><a href="dashboard.php"> Dashboard </a></li>
                <li><a href= "viewProfile.php"> View Profile </a> </li>
                <li><a href="editProfile.php"> Edit Profile </a></li>
                <li><a href="changePassword.php">Change Password </a> </li>
                <li><a href="logout.php">Logout</a></li>
      
		    </ul> 
			 
		    </h4>
			 
		    <hr>
		
	     <div align="center">
		
		    <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> <span/> <h4/> 
			
		</div>   
		
	 </body>
	 
</html>	 