<?php

require_once '_header.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
<div class="login-clean">
        <form method="post" action="../Controller/CheckoutController.php">
            <h2 class="sr-only">Checkout</h2>

            <label>Credit Card</label>
            <div class="form-group">
            	<select class="form-control" id="creditCard" name="CreditCard">
            		<optgroup label="This is a group">
            			
            		</optgroup>
            	</select>
            </div>

            <label>Shipping Address</label>
            <div class="form-group">
            	<select class="form-control" id="address" name="Address">
                	<optgroup label="This is a group">
                		
                	</optgroup>
                </select>
            </div>

            <!-- <label>Label</label>
		    <div class="form-group">
		    	<select class="form-control">
		        	<optgroup label="This is a group">
		        		<option value="12" selected="">This is item 1</option>
		        		<option value="13">This is item 2</option>
		        		<option value="14">This is item 3</option>
		        	</optgroup>
		        </select>
		    </div> -->
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Order</button></div>
        </form>
        </div>

        <!-- Ajax calls to populate the select boxes -->

        <script type="text/javascript">
        	//code
        	function getCreditCards() {
        		let dropdown = $('#creditCard');

        		dropdown.empty();

        		dropdown.append('<option selected="true" disabled>Choose Card</option>');
        		dropdown.prop('selectedIndex', 0);

                $.ajax({
                    type:"GET",
                    url:'../Controller/CheckoutCCController.php',
                    dataType:"json",
                    success: function(data){
                        $.each(data, function(key, entry){
                            dropdown.append($('<option></option>').attr('value', entry.id).text(entry.ccNum));
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                        alert("CC = " + ajaxOptions);
                        alert("CC = " + thrownError);
                    }
                });
        	}

        	function getAddresses(){
        		let dropdown = $('#address');

        		dropdown.empty();

        		dropdown.append('<option selected="true" disabled>Choose Address</option>');
        		dropdown.prop('selectedIndex', 0);

                $.ajax({
                    type:"GET",
                    url:'../Controller/CheckoutAddrController.php',
                    dataType:"json",
                    success: function(data){
                        $.each(data, function(key, entry){
                            dropdown.append($('<option></option>').attr('value', entry.id).text(entry.addr1));
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                        alert(ajaxOptions);
                        alert(thrownError);
                    }
                });
        	}

            $(document).ready(getAddresses);
            $(document).ready(getCreditCards);
        </script>
</body>
</html>