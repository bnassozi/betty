<?php
include_once('connection.php');
//$mysqli = mysqli_connect('localhost','root',"",'id13588801_studentdbms');
if(isset($_POST['save'])){

	$name = $_POST['name'];
	$location = $_POST['location'];
	
$sql = "INSERT INTO parents (name, location)
VALUES ('$name', '$location')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

	

}
