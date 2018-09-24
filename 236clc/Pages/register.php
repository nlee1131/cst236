<?php
include '_header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register</title>
</head>
<body>
	<form action="registerHandler.php" method="POST">
		<fieldset>
			<table>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="firstName" required pattern="{2,45}" /></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lastName" required pattern="{2,45}" /></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" required pattern="{5,50}" /></td>
				</tr>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="username" required pattern="{5,50}" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" required
						pattern="{8,50}" /></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="number" name="age" required /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" /><br></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>