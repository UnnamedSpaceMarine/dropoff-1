<html>
<head>
	<title>Dropoff Login</title>
	<style type="text/css">
	body {
		font-family: Helvetica, Arial, san-serif;
	}
	</style>
</head>
<body><h3><center>
	<?php
	if (!empty($_GET['message'])) {
		echo "$_GET[message]<br />"; 
	}
?>
	<br>
	Dropoff System Login
	<br>
	<br>
<form action="auth_user.php" method="post">
Username: <input type="text" name="username" align-"center"/><br /><br>
Password: <input type="password" name="password" align-"center"/><br /><br>
<input type="submit" value="login" /></center></h3>
</form>
</body>
</html>