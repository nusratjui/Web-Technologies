<!DOCTYPE html>
<html >
  <head> <title> PASSWORD </title>
     <style>
     .error {color: #FF0000;}
    </style>
   
  </head>
  <body>
  
     <br> 
		
		   <div> 
		   
		     <p> <h1 style="color: green">  X  <sub style="color:black"> Company </sub> <h1> </p>
		 
		   
		       <h3 align= "right">
		 
		 
		        Logged in as<a style ="color:SlateBlu;"  href= "http://localhost/Lab%20Task%204/Profile.php"> Bob | </a>
		       <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php">  Logout </a>  
		       
		   </h3>
		   
		  <hr>
		  
		</div> 
			
			
	      <h2> <u> Account </u> </h2> <span style="color: rgb(255, 255, 255);"> *************** </span> 
		    
		   
            <h4>
            <ul>
                <li> <a style="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Dashboard.php">  Dashboard   </a></li> 
                <li> <a style ="color:SlateBlu;"  href= "http://localhost/Lab%20Task%204/Profile.php"> View Profile </a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Edit%20Profile.php"> Edit Profile <a> </li>
				<li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/profile%20picture.php">Change Profile Picture</a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/Change%20Password.php">Change Password</a> </li>
                <li> <a style ="color:SlateBlu;" href="http://localhost/Lab%20Task%204/LogIn.php">Logout</a> </li>
                 
		     </ul>  
		     <h4/>

    <?php
   $currentPassword=$newpassword=$rnewpassword="";
   $cpasswordError=$npasswordError=$rnpasswordError="";

   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
     if (empty($_POST["currentPassword"]))
	 {
       $cpasswordError = "Current password is required!";
     }
     else
	 {
       $currentPassword = test_input($_POST["currentPassword"]);
       if (strcmp($currentPassword,"nusratjahan"))
		{
          $cpasswordError= "Incorrent password!";
        }     
	 }

        if (empty($_POST["newpassword"])) 
		{
          $npasswordError = "New password is required!";
        }
        else 
		{
         $newpassword = test_input($_POST["newpassword"]);

          if (!strcmp($newpassword,"nusratjahan"))
		   {
             $npasswordError = "Current and New password can't be same!";
           }  
		}

           if (empty($_POST["rnewpassword"]))
			{
             $rnpasswordError = "Retype New Password is required!";
            }
           else 
		   {
            $rnewpassword = test_input($_POST["rnewpassword"]);
             if (strcmp($newpassword,$rnewpassword)) 
			 {
                $rnpasswordError = "Retype password and New Password need to be same!";
             }
			 else
			 {
				  $updated = "Pasword upadated success fully";
			 }
			 
            }
    }

   function test_input($data) 
   {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data; 
   }
     ?>
	      <div>
		  <br> <br>
         
          <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <br>
		  <h1 align="center" > <b> CHANGE PASSWORD </b> </h1><br> <br> <br>
		  
		  <p align="center">
		  
	  
          <label>Current Password:</label> 
		  <input type="password" name="currentPassword" value="<?php echo $currentPassword;?>">
          <span class="error">* <?php echo $cpasswordError;?></span>
          <br/><br/>
		  
		  
          <label style="color:green">New Password:</label>
          <input type="password" name="newpassword" value="<?php echo $newpassword;?>">
          <span class="error">* <?php echo $npasswordError;?></span>
          <br/><br/>
		  
		  
          <label style="color:Red">Retype New Password:</label>
          <input type="password" name="rnewpassword" value="<?php echo $rnewpassword;?>">
          <span class="error">* <?php echo $rnpasswordError;?></span>
          <br/><br/>
		  
		  
		 
          <input type="submit" name="submit" value="Submit">
		  <?php  					 
                     if(isset($updated))  
                     {  
                          echo $updated;  
                     }  
            ?> 
          <br/>
		    <hr>
		  </p>
		  
		  </div>
		  
		  <div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> </span> </h4>
		   
		        </div>
				
                 <br>
      </form>
  </body>
</html>
