<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>
	<h1>WELCOME TO THE PARENT PORTAL!</h1>
<h2>Search Data by Index Number!.</h2>

<div id = 'frm'>
	
	<form action="" method="POST">
		<input type="text" name="indexno" placeholder="Enter Student Index Number">
		<input type="submit" name="search" value="SEARCH ">

	</form>
	<table>
		<tr>
<th>STUDENT Name</th>
<th>NETWORKING </th>
<th>O O P</th>
<th>WEB DESIGN </th>
<th>DATABASE</th>
<th>COMPUTER LIT </th>
			

		</tr>
		<?php
		//$servername="localhost";
		//$username="root";
		//$password="";
		//$dbname="id13588801_studentdbms";
	//		$conn = mysqli_connect($servername,$username,$password,$dbname);
			include_once('connection.php');

			$db = mysqli_select_db($conn,"id13588801_studentdbms");

			if(isset($_POST['search'])){

				$id = $_POST['indexno'];

				$query ="SELECT * FROM `marks` where indexno = '$id'";

				print_r($query);

				$query_run = mysqli_query($conn,$query);
				while($row = mysqli_fetch_array($query_run))
				{
					?>
					<tr>
						<td><?php echo $row['studname']?></td>
						<td><?php echo $row['networking']?></td>
						<td><?php echo $row['oop']?></td>
						<td><?php echo $row['webdes']?></td>
						<td><?php echo $row['data']?></td>
						<td><?php echo $row['complit']?></td>
						

						

					</tr>
				<?php
			}
		}



		?>
	</table>
</div>
</body>
</html>