<?php 
require_once '_header.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="contact-clean">
        <form method="post" action="../Controller/ProductAdminController.php">
            <h2 class="text-center">Products</h2>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" value="1" name="operation"><label class="form-check-label" for="formCheck-1">Create</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" value="2" name="operation"><label class="form-check-label" for="formCheck-1">Update</label></div>
                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" value="3" name="operation"><label class="form-check-label" for="formCheck-1">Delete</label></div>
            </div>
            <div class="form-group"><input class="form-control" type="number" name="id" placeholder="ID"></div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control" type="text" name="image" placeholder="Image"></div>
            <div class="form-group"><textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea></div>
            <div class="form-group"><input class="form-control" type="text" name="price" placeholder="Price"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>