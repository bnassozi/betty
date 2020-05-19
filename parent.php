<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-<!DOCTYPE html>
<html>
<head>
<title>Report</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #e5f5f5}
</style>
</head>
<body>
<table>
<tr>
<th>Student Name</th>
<th>COURSE </th>
<th>O O P</th>
<th>WEB DESIGN </th>
<th>DATABASE</th>
<th>COMPUTER LIT </th>

</tr>
<?php 
include_once('connection.php');
#$conn = mysqli_connect("localhost", "id13588801_admin", "Bettyjeff123!@#", "id13588801_studentdbms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT marksid, indexno,studname,course,webdes,oop,complit,data,networking, password FROM marks ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {


echo "<tr><td>" . $row["marksid"]. "</td><td>" . $row["indexno"] . "</td><td>"
. $row["studname"]. "</td><td>" . $row["course"] . "</td><td>"
. $row["webdes"] . "</td><td>" . $row["oop"] . "</td><td>" 
. $row["complit"] . "</td><td>" . $row["data"]  . "</td><td>"
. $row["networking"]. " </td></tr>";
}

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>p