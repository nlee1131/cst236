<?php
require_once '_header.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Address</title>
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
</head>

<body>
    <div class="contact-clean">
        <form method="post" action="../Controller/AddressController.php">
            <h2 class="text-center">Address</h2>
            <div class="form-group"><input class="form-control" type="text" name="addr1" required="" placeholder="Address Line 1" pattern=".{0,50}"></div>
            <div class="form-group"><input class="form-control" type="email" name="addr2" placeholder="Address Line 2" pattern=".{0,50}"></div>
            <div class="form-group"><input class="form-control" type="text" required="" name="city" placeholder="City" pattern=".{3,50}"></div>
            <div class="form-group"><input class="form-control" type="text" required="" name="state" placeholder="State" pattern=".{5,50}"></div>
            <div class="form-group"><input class="form-control" type="number" required="" name="postal" placeholder="Postal Code"></div>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="addrType" value="1"><label class="form-check-label" for="formCheck-1">Billing Address</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>