<?php
//include '_header.php';
require_once '_header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="../Controller/LoginController.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="form-group"><input class="form-control" type="text" required pattern=".{5,45}" name="username" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" required placeholder="Password" pattern=".{5,45}" pattern="^[a-zA-Z0-9_.-]*$"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
        </form>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>