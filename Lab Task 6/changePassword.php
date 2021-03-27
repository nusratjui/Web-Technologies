<?php
session_start();
?>

<!DOCTYPE html>
<html> <title> CHANGE PASSWORD </title>
      <body>
              <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
		      <h3 align= "right">
			
		        Logged in as<?php echo $_SESSION['username']?> | </a>
		       <a href="logout.php">Logout</a>
               <hr>			   
		      </h3>  
			  
			  
		   
	      <h2> <u> Account </u> </h2> 
		  
            <ul>
			   <li>  <a href="dashboard.php"> Dashboard </a></li>
                <li> <a href= "viewProfile.php"> View Profile </a> </li>
                <li> <a href="editProfile.php"> Edit Profile </a></li>
                <li> <a href="changePassword.php">Change Password</a> </li>
                <li> <a href="logout.php">Logout</a> </li>
      
		     </ul>  
		     <h4/>


      <h3 align="center"><legend> <h2> <b>CHANGE PASSWORD </h2> </b></legend></h3><br>
	  
	  
      <form  action="controller/changePasswordController.php?id=<?php echo $_SESSION['username'] ?>" method="post" enctype="multipart/form-data">
	  
	    <h3 align="center"> </p> 
			  
		  <label>Current Password <span style="color: rgb(255, 255, 255);"> ******* </span>:</lebel> 
		  <input type="password" name="cpassword">        
          <br><br>
		  
          <label>New Password <span style="color: rgb(255, 255, 255);"> ********** </span>:</lebel>
          <input type="password" name="password" >         
          <br><br>
		  
          <label>Retype New Password <span style="color: rgb(255, 255, 255);"> *** </span>:</lebel>
          <input type="password" name="rnpassword" >        
          <br><br>
		  
          <input type="submit" name="submit" value="Submit">
          <hr><br>
		  
		  </h3>
		  
      </form>
      <div align="center">
		  
	  <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> </span> </h4>
		          	  
  </body>
</html>
