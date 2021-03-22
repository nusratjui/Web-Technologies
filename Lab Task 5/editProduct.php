<?php 

require_once 'controller/displayController.php';

$product = fetchProduct( $_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> EDIT PRODUCT </title>
</head>
<body>

    <form action="controller/editProductController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data"><br>
	
    <fieldset>
	
       <legend><b> <h2> EDIT PRODUCT </h2></b></legend> 
	   
        <label> Name </label><br>
        <input type="text" name="name" value="<?php echo $product['Name']; ?> " > <br><br>
	   
        <label> Buying Price </label><br>
        <input type="text" name="buying_price" value="<?php echo $product['Buying_Price']; ?> " > <br><br>
	   
       <label> Selling Price </label> <br>
       <input type="text" name="selling_price" value="<?php echo $product['Selling_Price']; ?> " > <br><br>
	   <hr>
  
       <input type="checkbox" name="display" value="Yes" <?php if($product['Display']=='Yes'){echo 'checked';} ?>>Display<br>
	   <hr>
	   
       <input type="submit" name="submit" value="SAVE">
	  
	  </fieldset>
	  
   </form>
</body>
</html>
<?php 
