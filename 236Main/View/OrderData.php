<?php

require_once '_header.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Data</title>
</head>
<body>
<table border="1" id="orderData" width="50%" class="display responsive nowrap">
	<thead>
		<th width="14%">First Name</th>
		<th width="14%">Address</th>
		<th width="14%">Order Number</th>
		<th width="14%">Quantity</th>
		<th width="14%">Date</th>
		<th width="14%">Product Name</th>
		<th width="14%">Product ID</th>
	</thead>
	<tbody>
		<!-- auto made with ajax datatable -->
	</tbody>
</table>
<script type="text/javascript">
	//ajax function
	function getOrderData()
	{
		$.ajax({
			type:"GET",
			url:"../Controller/OrderDataController.php",
			dataType:"json",
			success: function(data){
				alert(data);
				$('#orderData').DataTable({
					"data": data,
					"columns": [{"data":"firstName"},{"data":"addr"},{"data":"orderID"},{"data":"quantity"},{"data":"date"}, {"data":"prodName"},{"data":"prodID"}]
				});
			},
			error: function(xhr, ajaxOptions, thrownError){
				alert(xhr.status);
				alert(thrownError);
			}
		});
	}
	//doc ready call
	$(document).ready(getOrderData);
</script>
</body>
</html>