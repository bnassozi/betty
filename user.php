<?php

include_once('connection.php');
session_start();
$fname = $_GET['firstname'];
$sname = $_GET['secondname'];
$intake = $_GET['intake'];
$cousrse = $_GET['course'] ;
$dob = $_GET['dob'];
$contact = $_GET['contact'];
$gender = $_GET['gender'];
$pname = $_GET['parentname'];
$pcontact = $_GET['parentcontact'];

//check if browser out puts
#echo $fname;
#echo $pcontact;




if (!$conn)
{
	die ("Error  : ".mysqli_connect_error());
}
if ($fname !== $sname)
{
$sql = "INSERT INTO `students`(`sid`, `firstname`, `secondname`, `year`, `course`, `dob`, `contact`, `gender`, `parentname`, `pcontact`) VALUES ('sid','firstname','secondname','year','course','dob','contact','gender','parentname','parentcontact');";
if(mysqli_query($con,$sql)){
	echo "Registration success";
}else {
	echo "Some thing went wrong";
}

}else
{
	echo "Names  Matched";

}
mysqli_close($con);
?>