<!DOCTYPE html>
<html> <title> Upload File </title>
<body>

    <form action="upload.php" method="post" enctype="multipart/form-data"> <br>
   
        <h2> PROFILE PICTURE </h2> 
             <img  src="profile_pic.png" height="200px" width="250px"  title="profile pic"> </img> <br>

        <label> Select image to upload: <span style="color: rgb(255, 255, 255);"> ****** </span>  </label>
        <input type="file" name="fileToUpload" id="fileToUpload"> <br> <br>
  
        <div>
         <hr>
             <input type="submit" name="submit" value="Submit" >
       </div>	 
    </form>

   </body>
</html>