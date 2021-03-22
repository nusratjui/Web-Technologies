<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<table border="1" width="400" height="200" style="border-collapse:collapse">

	<thead>
		<tr>
			<th>NAME</th>
			<th>PROFIT</th>
			<th>ACTION</th>
		</tr>
	</thead>
	
	<tbody>
	
		<?php foreach ($allSearchedProducts as $i => $product): ?>
			<?php if($product['Display']=='Yes'){ ?>
			
			<tr align="center">
			
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['Selling_Price'] - $product['Buying_Price'] ?></td>
				<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>"> edit</a>&nbsp <a href="delete.php?id=<?php echo $product['ID'] ?>">delete</a></td></tr>
		<?php } ?>
		
		<?php 
		endforeach; 
		?>
	</tbody>
	
</table>

</body>
</html>