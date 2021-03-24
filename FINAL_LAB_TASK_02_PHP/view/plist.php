<?php
	require_once('../model/pmodel.php');
	$product = getAllProduct();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
</head>
<body>

</body>
</html>


	<div id="page_title">
		<h1>Product List</h1>
	</div>

	<div id="nav_bar">

		<a href="addproduct.html">Back</a>

	</div>

	<div id="main_content">

		<table border="1">
			<tr>
				<td>NAME</td>
				<td>SELLING PRICE</td>
				<td>BUYING PRICE</td>
			</tr>

			<?php for($i=0; $i < count($product); $i++){ ?>
			<tr>
				<td><?=$product[$i]['name']?></td>
				<td><?=$product[$i]['b_price']?></td>
				<td><?=$product[$i]['s_price']?></td>

			</tr>

			<?php } ?>
		</table>

	</div>
