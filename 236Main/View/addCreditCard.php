<?php
require_once '_header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Credit Card</title>
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
</head>

<body>
    <div class="contact-clean">
        <form method="post" action="../Controller/CreditCardController.php">
            <h2 class="text-center">Credit Card</h2>
            <div class="form-group"><input class="form-control" type="number" name="cc" required="" placeholder="Credit Card Number" pattern="[0-9]{16}"></div>
            <div><h6>Please do not use a real credit card.</h6></div>
            <div class="form-group"><input class="form-control" type="number" name="csv" required="" placeholder="Security Code" pattern="[0-9]{3}"></div>
            <div class="form-group"><input class="form-control" type="number" required="" name="exmon" placeholder="Expiration Month" pattern="[0-9]{2}"></div>
            <div class="form-group"><input class="form-control" type="number" required="" name="exyear" placeholder="Expiration Year" pattern="[0-9]{4}"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>