<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout page</title>
</head>
<body>
<form action = "index.php">
<input type="submit" name="redirect" value = "Please Login">
</form>
</body>
</html>