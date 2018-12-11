<?php

require_once '../Autoloader.php';
require_once '_header.php';

$productService = new ProductBusinessService();


if(isset($_SESSION["cart"]))
{
	$c = $_SESSION["cart"];
}
else
{
	echo "Your cart is empty :( <br>";
	exit;
}
// print_r($c);
// echo "<pre>";
// print_r($_SESSION["cart"]);
// echo "</pre>";
setlocale(LC_MONETARY, 'en_US.UTF-8');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" href="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../assets/css/styles.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
    	$.fn.dataTable.Api.register( 'column().data().sum()', function () {
		    return this.reduce( function (a, b) {
		        var x = parseFloat( a ) || 0;
		        var y = parseFloat( b ) || 0;
		        return x + y;
		    } );
		} );
 
		/* Init the table and fire off a call to get the hidden nodes. */
		$(document).ready(function() {
		    $('#cart').DataTable();
		     
		    $('<button>Click to sum price in all rows</button>')
		        .prependTo( '#demo' )
		        .on( 'click', function () {
		            alert( 'Total is: '+ <?php echo money_format('%.2n', $c->getTotalPrice()); ?>);
		        } );
		} );
	</script>
</head>
<body>
	<div id="demo">
		<table id="cart" class="table table-striped table-bordered responsive nowrap">
			<thead>
				<th>Name</th>
				<th>Description</th>
				<th>Image</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Subtotal</th>
			</thead>
				<?php 
					foreach ($c->getItems() as $prod_id => $qty) {
						$product = $productService->findById($prod_id);
				?>

						<tbody>
							<tr>
								<td><?php echo $product->getName(); ?></td>
								<td><?php echo $product->getDescription(); ?></td>
								<td><img src="<?php echo $product->getImage(); ?>"></td>
								<td><?php echo $qty; ?></td>
								<td><?php echo money_format('%.2n', $product->getPrice()); ?></td>
								<td><?php echo money_format('%.2n', $qty * $product->getPrice()); ?></td>
							</tr>
						</tbody>

				<?php
					}
				?>
		</table>
	</div>

	<div>
		<a href="http://localhost:8888/236Main/View/checkout.php" class="btn btn-success">Checkout</a>
	</div>
</body>
</html>