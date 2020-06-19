<?php
$country = $_GET['country']??'Ukraine';


error_reporting (0);
$connect = mysqli_connect ('localhost','root','','myitedu');

if (!$connect){
	exit("We didn't found it");
}
$sql = "SELECT * FROM airports WHERE country= '$country'";
$result = $connect->query ($sql);

if ($result->num_rows==0){
		exit("wrong");
}
?>
<!--
<!doctype html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
		<table class="table table-bordered">
				<tr>
						<th>Country:</th>
						<th>City:</th>
						<th>ID:</th>
						<th>Code:</th>
				</tr>
				<?php
				while ($row=$result->fetch_assoc ()){
				?>
				<tr>
						<td><?php echo $row['country'];?></td>
						<td><?php echo $row['city'];?></td>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['code'];?></td>
				</tr>
				<?php
				}
				?>
		</table>
</div>
</body>
</html>
--->
