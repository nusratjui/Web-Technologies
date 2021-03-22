<?php 

require_once '../model/model.php';

if(isset($_POST['submit'])) 
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
		$data['display'] = $_POST['display'];
	}
  if (updateProduct($_GET['id'],$data))
  {
  	header('Location: ../display.php');
  }
} 

else 
{
	echo ' You are not allowed to access this page.';
}

?>
