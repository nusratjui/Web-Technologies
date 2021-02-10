<!DOCTYPE HTML>  
<html>
  <head>
    <style>
     .error {color: #FF0000;}
    </style>

    </head>
    <body>  
	
	   

    <?php
           // define variables and set to empty values
        $nameErr = $emailErr = $date_of_birthErr = $genderErr =  $degreeErr = $blood_groupErr = " ";
        $name = $email = $date_of_birth = $gender = $blood_group = " "; 
		$degree = array();

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
    
	
	        if(empty($_POST["date_of_birth"])) 
		    {
                $date_of_birthErr = "Date of birth is required!";
            } 
		    else 
		    {
               $date_of_birth = test_input($_POST["date_of_birth"]); 
            }
   
		    if(empty($_POST["gender"])) 
		    {
               $genderErr = "Gender is required!";
            } 
		    else 
		    {
             $gender = test_input($_POST["gender"]);
            }
	      
		  
	 	   if (empty($_POST["degree"])) 
		   {
                 $degreeErr= " Degree is required! ";
           } 
           else 
		   {
               foreach ($_POST["degree"] as $key) 
			   {
               array_push($degree, $key);
               }
               if(count($degree)<2)
		       {
                  $degreeErr = "Must select at least two option!";
               }
           }
			
			
            if(empty($_POST["blood_group"])) 
			{
                  $blood_groupErr = " Blood group is required! ";
            } 
			else 
			{
                 $blood_group = test_input($_POST["blood_group"]);
   
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

        <h2> Personal Form </h2> 
	  
	  
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		  
		  
		       <b> <label for="name"> Name : </label> </b>
			   <input type="text" name="name" value="<?php echo $name;?>">
			   <span class="error"> * <?php echo $nameErr; ?> </span>
               <br><br>
			  
			    <b> <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php echo $email;?>">
                <span class="error"> * <?php echo $emailErr;?></span>
                <br><br>

       
	            <b> <label for="date_of_birth"> Date Of Birth : </label> </b>
                <input type="date" name="date_of_birth" value="<?php echo $date_of_birth;?>">
		        <span class="error"> * <?php echo $date_of_birthErr;?></span>
                <br><br>

        
		        <b> <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Other  
                <span class="error"> * <?php echo $genderErr;?></span>
                <br><br>
  
                <b> <label for="degree"> Degree : </label> </b>
				
                <input type="checkbox" name="degree[]" value="SSC">SSC  <input type="checkbox" name="degree[]" value="HSC"> HSC 
				<input type="checkbox" name="degree[]" value="BSC">BSC <input type="checkbox" name="degree[]" value="MSC">MSC
             
                <span class="error"> * <?php echo $degreeErr;?></span>
                <br><br>
				 
		 		
                    <b> <label for="blood_group"> Blood Group : </label> </b>
					<select  name="blood_group">
						<option value="">Select Blood Group</option>
						<option value="A+VE">A+VE</option>
						<option value="A-VE">A-VE</option>
						<option value="B+VE">B+VE</option>
						<option value="B-VE">B-VE</option>
						<option value="O+VE">O+VE</option>
						<option value="O-VE">O-VE</option>
						<option value="AB+VE">AB+VE</option>
						<option value="AB-VE">AB-VE</option>
					</select>
		           <span class="error"> * <?php echo $blood_groupErr;?></span>
		           <br> <br>
 
                 <input type="submit" name="submit" value="Submit">  
				
         </form> <br>
	

    <?php
        echo "<h2> Personal Info:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $date_of_birth;
        echo "<br>";
        echo $gender;
        echo "<br>";
        $arrlength = count($degree);
        for($x = 0; $x < $arrlength; $x++) 
		{
        echo $degree[$x];
        echo "<br>";
        }
		
        echo "<br>";
        echo  $blood_group;

    ?>
         
    </body>
</html>