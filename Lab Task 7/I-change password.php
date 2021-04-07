<!DOCTYPE html>
<html>
<head>
	<title> Change Password</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-4.css">
	<style type="text/css"></style>
</head>
<body>
	<br><i> <h1 align="center" style="color:blue"> LEARNING CS </i> </h1> 
		      <h5 align= "right">
		      Logged in as <?php echo "Nusrat"?>|
		       <a href="logout.php">Logout</a>
			   <hr>
	          </h5>
	<br>
	<div class="container" align="center">
  		<div class="row">
  			<div class="col-4">
  			</div>
    		<div class="col-8">
    			<div id="bb"><br>
				
			<h3 align="center"><legend> <h4> <b>CHANGE PASSWORD </h4> </b></legend></h3><br>	
				
		   <label><b>Current Password <span style="color:#524d7a;"> ******* </span>:</b></lebel> 
		  <input type="password" name="cpassword">        
          <br><br>
		  
          <label><b>New Password <span style="color:#524d7a;"> ********** </span>:</b></lebel>
          <input type="password" name="password" >         
          <br><br>
		  
          <label><b>Retype New Password <span style="color: #524d7a;"> *** </span>:</b></lebel>
          <input type="password" name="rnpassword" >        
          <br><br>
		  
          <b><input type="submit" name="submit" value="Submit"></b>
			          <br>
      			</div>
   			</div>
  		</div><br>
	</div>
 <div align="center">
</div>
</body>
</html>