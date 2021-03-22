<?php 

require_once '../model/model.php';

if (deleteProduct($_GET['id'])) 
{
    header('Location: ../display.php');
}
else
{
	echo '<br> You can not delete any product details !</br>';
}

?>