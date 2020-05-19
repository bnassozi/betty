


<!DOCTYPE html>
<html>
<head>
	<title>par</title>
</head>
<body>
<div>
	<?php 
session_start();

include_once('connection.php');


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

?>
</div>
</body>
</html>