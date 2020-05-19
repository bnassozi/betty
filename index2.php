
<!DOCTYPE html>

<?php
$servername="localhost";
$username="id13588801_admin";
$password="Beckyjeff123!@#";
$dbname="id13588801_studentdbms";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo"connection";

if(isset($_POST['Login'])){

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$usertype = $_POST['usertype'];
	$query = "SELECT username,password,usertype FROM user WHERE username ='".$user."' and password = '".$pass."' and usertype = '".$usertype."'";
	$result = mysqli_query($conn, $query);
	if($result){
		while ($row = mysqli_fetch_array($result)){
			echo '<script type = "text/javascript"> alert("You are logged in as ' .$row['usertype']. '") ) </script>';
		}
		if($usertype == "Admin"){
			?>
			<script type="text/javascript">
				window.location.href ="admin.php"
			</script>
			<?php 

		} else if($usertype == "Registra"){
			?>
			<script type="text/javascript">
				window.location.href = "registra.php"
			</script>
			<?php
		} else {
			?>
			<script type="text/javascript">
				window.location.href = "parent.php"
			</script>
			<?php
}

		}else {
			echo 'no results';
	}
}










?>
<html>
<head>



	<title>login</title>
</head>
<body>
<form method = "POST">
	<table>
		<tr>
	<td> User Type </td>
	<td>
		<select name = "usertype">
			<option value = "-1"> Select User type</option>
			<option value=" Admin">Admin</option>
			<option value = "Parent">Parent</option>
			<option value="Registra">Registra</option>
		</select>
	</td>
</tr>

<tr>
	<td>Username</td>
	<td><input type="text" name="user" placeholder="Username"></td>
</tr>
<tr>
	<td>Password</td>
	<td><input type="password" name="pass" placeholder="pasword"></td>
</tr>
<tr>
	
	<td>
		&nbsp;
	</td>
	<td>
		<input type="submit" name="Login" value = "Login">
	</td>
</tr>
</table>
</form>

</body>
</html>









