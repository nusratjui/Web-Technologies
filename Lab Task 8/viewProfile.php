<?php
session_start();

require_once 'controller/viewProfileController.php';

$student = fetchProfile($_SESSION['username']);

?>

<html> 
	 <head>
	 <title> PROFILE </title>
	 </head>  
	 <body>
	      
		      <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
		
		      Logged in as <?php echo $_SESSION['nameDB']?>|
		      <a href="logout.php">Logout</a>  
			  <hr>
		   </h3>  
		   
		
	      <h2> <u> Account </u> </h2> 
		   
            <h4> <b>
            <ul>
               <li>  <a href="dashboard.php"> Dashboard   </a></li>
                <li> <a href= "viewProfile.php"> View Profile </a> </li>
                <li> <a href="editProfile.php"> Edit Profile </a></li>
                <li> <a href="changePassword.php">Change Password</a> </li>
                <li><a href="showCourse.php">Courses</a></li>
               
		     </ul>  
		     <h4/></b>
			 
		    <h2 align="center"> PROFILE </h2><br>
			
			<h3 align="center">
		    
			
			
		      Name<span style="color: rgb(255, 255, 255);"> ******* </span>:
			  <?php echo $student['Name']; ?> 
			  <br><br>
			  
	          Email <span style="color: rgb(255, 255, 255);">**** </span>:
			  <?php echo $student['Email']; ?> 
			  <br><br>
			  
		      ContactNo<span style="color: rgb(255, 255, 255);"> ******** </span>:
			  <?php echo $student['ContactNo']; ?> 
			  <br><br>
			  
		      Username <span style="color: rgb(255, 255, 255);"> ****** </span>:
			  <?php echo $student['Username']; ?> 
			  <br><br>

			
			</h3>
		  
		   <div align="center">
		   
		    <hr>
		   
		   <h4> <span style="color: rgb(140, 140, 140);"> Copyright © <?php echo date(2021);?> </span> </h4>
		   
		   </div>
		   
	 </body>
	 
</html>	 