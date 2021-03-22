<?php  

require_once '../model/model.php';


if (isset($_POST['createProduct'])) 
	
{
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['buying_price'];
	$data['selling_price'] = $_POST['selling_price'];
	$data['profit']= $_POST['selling_price'] - $_POST['buying_price'];
	
	
	if(empty($_POST['display']))
	{
		$data['display'] = "No";
	}
	
	else
	{
		$data['display'] = "Yes";
	}

  if (addProduct($data)) 
  {
  	echo '<br><h2>Product details added successfully!</h2><br>';
  	echo "<a href='../display.php'>Display Product Details</a>";
  }
} 

else 
{
	echo 'You are not allowed to access this page.';
}

?>