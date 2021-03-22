<!DOCTYPE html>
<html>
<head> <title> ADD PRODUCT </title>

</head>
<body><br> 

         <form action="controller/createProductController.php" method="POST" enctype="multipart/form-data">
		 
      <fieldset>
	  
          <legend> <h2> <b> ADD PRODUCT </h2> </b> </legend>
            
			<div>
			
             <label for="name"> Name </label><br>
             <input type="text" id="name" name="name"><br><br>
  
             <label for="buying_price"> Buying Price</label><br>
             <input type="text" id="buying_price" name="buying_price"><br><br>
			
             <label for="selling_price"> Selling Price </label><br>
             <input type="text" id="selling_price" name="selling_price"><br><br>
			 <hr>
  
             <input type="checkbox" name="display" value="Yes">Display <br>
		     <hr>
 
            <input type="submit" name = "createProduct" value="SAVE">
		   
		    </div>
		   
      </fieldset>
</form> 

</body>
</html>

