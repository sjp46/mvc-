<h1> display the product list<h1>
<table id = 'display'>

	<tr>
		<th>code</th>
		<th>name</th>
		<th>price</th>
	</tr>
	<?php
	foreach($products as $product){
	?>

	<tr>
		<td><?php echo $product['productCode'];?><td>
		<td><?php echo $product['productName'];?><td>
		<td><?php echo $product['listPrice'];?><td>
	</tr>



</table>

