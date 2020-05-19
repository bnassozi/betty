<?php
session_start();

if(isset($_POST['Login'])){
#if($_POST['submit']) {
	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$sql = "SELECT id,username,password FROM users where username = '$username' LIMIT 1";
	$query = mysqli_query($conn, $sql);
	if($query) {
		$row = mysqli_fetch_row($query);
		$userId= $row[0];
		$dbusername = $row[1];
		$dbPassword = $row[2];
	}
	if($username == $dbusername && $password == $dbPassword) {
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $userId;
		//header('Location: par.php');
		$db = mysqli_select_db($conn,'id13588801_studentdbms');
if(isset($_POST['Login'])){
	$username= $_POST['username'];
	$query = "SELECT * FROM marks WHERE indexno = $username";
	$query_run = mysql_querry($conn,$query);

	while($row = mysqli_fetch_array($query_run)){

		?>
		<div>
			<?php echo $row['indexno']; ?>
		</div>
		<div>
			<?php echo $row['studname']; ?>
		</div>
		<div>
			<?php echo $row['course']; ?>
		</div>
		<div>
			<?php echo $row['webdes']; ?>
		</div>
		<div>
			<?php echo $row['oop']; ?>
		</div>
		<div>
			<?php echo $row['complit']; ?>
		</div>
		<div>
			<?php echo $row['data']; ?>
		</div>
		<div>
			<?php echo $row['networking']; ?>
		</div>
		<?php
	}
}
	}
	else {
		echo "<div id ='error'><h1><b><i>Incorrect Entries Try Again Please! </i><b></h1></div><div></div>";

	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#error{
			background-color: red;

		}
	</style>
	<title> Login</title>
</head>
<body>
<h1>Welcome to the Students Results System</h1>
<h2>Login</h2>
<form method="post" action="par.php">
	<input type="text" name = "username" placeholder="Enter username">
	<input type="password" name="password" placeholder="Enter password here">
	<input type="submit" name="Login" value="Login">
</form>

<div ></div>
</body>
</html>