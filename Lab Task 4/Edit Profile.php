<!DOCTYPE HTML>  
<html>
  <head> <title>  Edit Profile </title>
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
           // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $date_of_birthErr = " ";
        $name = $email = $gender = $date_of_birth = " "; 
		

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
             if (empty($_POST["name"])) 
		     {
               $nameErr = "Name is required!";
             } 
		  
		    else 
		    {
               $name = test_input($_POST["name"]);
		
		       // contains minimum word
		       if(str_word_count($_POST["name"]))
                  				   
		       {
                   $nameErr = "Name contains at least two word!";
		       }
               // check if name only contains letters and whitespace , period
                if(!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
		        {
                 $nameErr = "Only letters and white space allowed!";
                }
            }
  
            if(empty($_POST["email"])) 
		    {
                $emailErr = "Email is required!";
            } 
		   else 
		   {
               $email = test_input($_POST["email"]);
	  
             // check if e-mail address is well-formed
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		       {
                  $emailErr = "Invalid email format and must be in anything@example.Com! ";
               }
            }
    
	         if(empty($_POST["gender"])) 
		    {
               $genderErr = "Gender is required!";
            } 
		    else 
		    {
             $gender = test_input($_POST["gender"]);
            }
	      
	
	        if(empty($_POST["date_of_birth"])) 
		    {
                $date_of_birthErr = "Date of birth is required!";
            } 
		    else 
		    {
               $date_of_birth = test_input($_POST["date_of_birth"]); 
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

        
	  
	  
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  
		       <h1 align="center"> EDIT PROFILE </h1><br><br>
		       <p align="center">
		  
		       <b> <p align="center" <label for="name"> Name : </label> </b> 
			   <input type="text" name="name" value="<?php echo $name;?>"> 
			   <span class="error"> * <?php echo $nameErr; ?> </span> 
               <br> <br>
			  
			    <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span> 
                <br> <br>

          
		         
		        <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other  
                <span class="error"> * <?php echo $genderErr;?></span> 
                <br> <br>
		  
		  
		  
	            <b><p align="center" <label for="date_of_birth"> Date Of Birth : </label> </b>
                <input type="date" name="date_of_birth" value="<?php echo $date_of_birth;?>">
		        <span class="error"> * <?php echo $date_of_birthErr;?></span>
                <br> <br>
    
	             
       
 
                 <input type="submit" name="submit" value="Submit"> 
				  <hr>

                 </p>
				 
				<div align="center">
		  
		             <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2017);?> </span> </h4>
		   
		        </div>
				
                </form> <br>
	

    
    </body>
</html>