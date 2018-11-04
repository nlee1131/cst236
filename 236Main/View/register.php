<?php
//include '_header.php';
require_once '_header.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>registration</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    	function checkAvailability(){
    		jQuery.ajax({
    			url: "../Controller/UsernameController.php",
    			data:'username='+$("#username").val(),
    			type: "POST",
    			success:function(data){
    				$("#user-availability-status").html(data);
    			},
    		error:function (){}
    	});
    	}
    </script>
</head>

<body>
    <div class="contact-clean">
        <form method="post" action="../Controller/RegisterController.php">
            <h2 class="text-center">Register</h2>
            <div class="form-group"><input class="form-control" type="text" name="firstName" required placeholder="First Name" pattern=".{3,45}"></div>
            <div class="form-group"><input class="form-control" type="text" required pattern=".{2,45}" name="lastName" placeholder="Last Name"></div>
            <div class="form-group"><input class="form-control" type="email" required pattern=".{5,45}" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="text" required pattern=".{5,45}" name="username" id="username" placeholder="Username" onkeyup="checkAvailability()"><span id="user-availability-status"></span></div>
            <div class="form-group"><input class="form-control" type="password" required pattern=".{5,45}" pattern="^[a-zA-Z0-9_.-]*$" name="password" placeholder="Password"></div>
            <div class="form-group"><input class="form-control" type="number" required name="age" placeholder="Age"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>