<?php

require_once '_header.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Data</title>

</head>

<body>
<table border="1" id="orderData" class="table table-striped responsive nowrap">
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
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
	//ajax function
	function getOrderData()
	{
		$.ajax({
            type:"GET",
            url:"../Controller/OrderDataController.php",
            dataType:"json",
            success: function(data){
                //alert(data);
                $('#orderData').dataTable({
                    "data": data,
                    "columns": [{"data":"firstName"},{"data":"addr"},{"data":"orderID"},{"data":"quantity"},{"data":"date"},{"data":"prodName"},{"data":"prodID"}]
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
