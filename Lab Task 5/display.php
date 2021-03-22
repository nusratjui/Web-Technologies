<?php  

require_once 'controller/displayController.php';

$products = fetchAllProducts();

?>
<!DOCTYPE html>
<html>
<head>
	<title> DISPLAY </title>
	
</head>
<body><br>

  <fieldset>
  
      <legend> <h2> <b> Display </h2> </b> </legend>
	  
         <table  border="1" width="400" height="200" style="border-collapse:collapse">
		 
	       <thead>
		      <tr>
			     <th><b>NAME</b></th>
			     <th><b>PROFIT</b></th>
			     <th><b>ACTION</b></th>
		     </tr>
	       </thead> 
		   
	<tbody>
		<?php foreach ($products as $i => $product): ?>	
				<?php if($product['Display']=='Yes'){ ?>	
				
			<tr align="center">
			
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['Profit'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">edit</a>&nbsp <a href="delete.php?id=<?php echo $product['ID'] ?>">delete</a></td>
				
			</tr>
			
		<?php } ?>	
		
		<?php 
		endforeach; 
		?>
		
	</tbody>
	
      </table><br>
   </fieldset>
</body>
</html>