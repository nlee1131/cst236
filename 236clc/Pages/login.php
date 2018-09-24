<?php
include '_header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
	<form action="loginHandler" method="post">
		<fieldset>
			User Name:<br> <input name="username" type="text" required /><br>
			Password:<br> <input name="password" type="password" required /><br>
			<input name="login" type="submit">
		</fieldset>
	</form>
</body>
</html>