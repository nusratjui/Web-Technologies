<html>
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style-1.css">
  </head>
  <body>
  <br><i> <br><br><br><br>
  
		      <h3 align= "center">
			
		      <a href="home page.php">Home |  </a> 
		      <a href="login.php">Login |  </a>  
		      <a href="registration.php">Registration| </a>
			  <a href="about.php">About </a>
		      </h3>  	
			  
           <form action="controller/loginController.php" method="POST" enctype="multipart/form-data">   
               <div class="login-box">
                   <h1>Login</h1>
                  <div class="textbox">
   
                    <input type="text" name="username" placeholder="Username">
					
                </div>

                <div class="textbox">
                  <input type="password" name="password" placeholder="Password">
                 </div>

                <input type="submit" name="submit" class="btn" value="Sign in"> 	
                </div>
             </form>
          </body>
        </html>
