<?php
session_start();


require_once 'controller/viewProfileController.php';
$student = fetchProfile( $_SESSION['username']);

?>

<!DOCTYPE html>
<html> 
	 <head>
	 <title> EDIT PROFILE </title>
	 </head>  
	 <body>
	      
		     
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			  
		       Logged in as<?php echo $_SESSION['username']?>|
		       <a href="logout.php">Logout</a>
			   <hr>
			   
		     </h3>  
			 

	        <h2> <u> Account </u> </h2> 
		   
            <ul>
			
			    <li> <a href="dashboard.php">Dashboard</a></li>
                <li> <a href= "viewProfile.php">View Profile </a> </li>
                <li> <a href="editProfile.php">Edit Profile </a></li>
                <li> <a href="changePassword.php">Change Password</a> </li>
                <li> <a href="logout.php">Logout</a> </li>
      
		     </ul> 
			 
		     <h4/>
   
    
          <form action="controller/editProfileController.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data"> 
		  
		   
		   
		      <h2 align="center"> EDIT PROFILE </h2><br>
			  
		      <h3 align="center">
			  
		      <label>Name <span style="color: rgb(255, 255, 255);"> ******* </span> :</label> 
              <input type="text" name="name" value="<?php echo $student['Name']; ?> " > <br><br>
			  
              <label>Email<span style="color: rgb(255, 255, 255);"> ******* </span>:</label>
              <input type="text" name="email" value="<?php echo $student['Email']; ?> " > <br><br>
			  
              <label>ContactNo <span style="color: rgb(255, 255, 255);"> *** </span>:</label>
              <input type="text" name="contactno" value="<?php echo $student['ContactNo']; ?> " > <br><br>
			  
			  <label>Username <span style="color: rgb(255, 255, 255);"> **** </span>:</label>
              <input type="text" name="username" value="<?php echo $student['Username']; ?> " > <br><br>
			  
			  
              <input type="submit" name="submit" value="Save">
			  <hr>
			  
              </h3>
				 
				<div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h4>
		         
	            </div>
				
         </form> <br>

    
    </body>
</html>