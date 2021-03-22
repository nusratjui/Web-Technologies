<!DOCTYPE html>
<html>
  <body>
  	<fieldset>
	<legend><b> <h2> SEARCH </b> </h2> </legend>  
	
      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
	  
      <input type="text" name="name" value="<?php if (!empty($_POST['Name'])) {echo $_POST['Name'];} ?>" required/>
	  
	  
      <input type="submit" name="findProduct" value="Search By Name"/>
	  
    </form>
	<br>
<?php 
require_once 'controller/searchProductController.php'; 
?>

     </fieldset>
  </body>
</html>