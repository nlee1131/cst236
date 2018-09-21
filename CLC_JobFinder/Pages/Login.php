<?php ?>
<html>
<header>
<title>Login</title>
<meta charset="UTF-8">
</header>
<body>
<form action="LoginHandler.php" method="POST">
<!-- Information input text boxes -->
    <fieldset>
        Email <br>
        <input type="email" name="Email" id="Email" maxlength="128"required><br>

        Password<br>
        <input type="password" name="Password" id ="Password" maxlength="128"required> <br><br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
        
        &nbsp; &nbsp;
        <!-- Go Back Button -->
            <a href="../index.html" class="button">Go Back</a>
    </fieldset>

</body>
</html>