<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
<p>GGWP</p>
<table>
	<th>ID </th>
	<th>Name </th>
	<th>Price </th>
	<th>Description </th>
	<?php foreach ($products as $key => $value) { ?>
	<tr> 
		<td><?php echo $value->product_id; ?></td>
		<td><?php echo $value->name; ?>	</td>
		<td><?php echo $value->price; ?>	</td>
		<td><?php echo $value->description; ?>	</td>

	</tr>
	<?php } ?>
</table>
</body>

</html>