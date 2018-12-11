<?php
//include '_header.php';
require_once '_header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Products</title>
    <!-- <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Data-Table-1.css">
    <link rel="stylesheet" href="../assets/css/Data-Table.css">
    <link rel="stylesheet" href="../assets/css/Dynamic-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../assets/css/styles.css"> -->
    <script type="text/javascript">
    	function addToCart(id)
    	{
    		$.ajax({
    			url: "../Controller/ShoppingCartController.php",
    			data:'add='+id,
    			type:"POST",
    			success: function(data){
    				alert("Successfully added product to your shopping cart!");
    			},
    			error: function(xhr, ajaxOptions, thrownError){
                        alert(ajaxOptions);
                        alert(thrownError);
                }
    		});
    	}
    </script>

</head>

<body>
	<table id="example" class="table table-striped table-bordered responsive nowrap">
		<thead>
			<tr>
				<th>Add to Cart</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Image</th>
			</tr>
		</thead>?
		<tbody>
			<?php
for ($i = 0; $i < count($products); $i++) {
    ?>
			    <tr>
			    	<td>
			    		<button value="<?php echo $products[$i]->getId(); ?>" name="add" id="addToCartButton" class="btn btn-primary" onclick="addToCart(<?php echo $products[$i]->getId();?>)">Add to cart</button>
			    	</td>
    			    <td><?php echo $products[$i]->getName(); ?></td>
    			    <td><?php echo $products[$i]->getDescription(); ?></td>
    			    <td><?php echo "$" . $products[$i]->getPrice(); ?></td>
    			    <td><img src="<?php echo $products[$i]->getImage(); ?>"></td>
			    </tr>
			    <?php
}
?>
		</tbody>
	</table>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/js/Dynamic-Table.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
    	$(document).ready( function () {
    	    $('#example').DataTable();
    	} );
	</script>
</body>

</html>