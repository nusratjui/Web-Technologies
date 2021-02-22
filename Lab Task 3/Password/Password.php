<!DOCTYPE html>
<html >
  <head> <title> PASSWORD </title>
     <style>
     .error {color: #FF0000;}
    </style>
   
  </head>
  <body>
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
          <h2> <b> CHANGE PASSWORD </b> </h2>
          <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <br>
		  
	  
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
		  
          <hr>
		 </div> 
		 
          <input type="submit" name="submit" value="Submit">
		  <?php  					 
                     if(isset($updated))  
                     {  
                          echo $updated;  
                     }  
            ?> 
          <br/><br/>
      </form>
  </body>
</html>
