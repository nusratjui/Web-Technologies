<?php if(!empty($_GET['id'])){ ?>

<?php 

require_once 'controller/displayController.php';

$product = fetchProduct($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title> DELETE PRODUCT </title>
</head>
<body><br>
	<fieldset>
       <legend> <h2> <b> DELETE PRODUCT </h2> </b> </legend> 
	   
        <form action="controller/deleteProductController.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
		  
        <label> Name <span style="color: rgb(255, 255, 255);">******** </span> :</label>
        <?php 
		echo $product['Name']; 
		?> <br><br> 
		
        <label>Buying Price <span style="color: rgb(255, 255, 255);">** </span> :</label>
        <?php 
	    echo $product['Buying_Price']; 
	    ?><br><br>
	   
        <label>Selling Price <span style="color: rgb(255, 255, 255);">** </span> :</label>
        <?php echo $product['Selling_Price']; 
	    ?> <br><br>
	  
        <label>Displayable <span style="color: rgb(255, 255, 255);">** </span> :</label>
        <?php 
	    echo $product['Display']; 
	    ?><hr>
 
		
        <input type="submit" name="submit" value="Delete">
		
      </form>
	  
    </fieldset>
</body>
</html>
<?php }

else
{
	echo "You are not allowed to access this page.";
} 
?>