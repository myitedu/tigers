<!doctype html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>By My Shop</title>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/fontawesome/css/all.css">
	<script src="/js/jquery.js"></script>
</head>
<body>
<?php include 'backend.php'; ?>
<div class="form_div">
		<form method="post">
				<label for="name">Name of The Car:</label><br>
			<select name="cars" id="car_title">
				<option value="ty">Toyota</option>
				<option value="ls">Lexus</option>
				<option value="ms">Mercedes</option>
				<option value="bmw">BMW</option>
			</select><br><br>
				<label for="name">Car Model:</label><br>
			<select name="model" id="car_model">
				<option value="cm">Camry</option>
				<option value="570">570</option>
				<option value="g63">G 63</option>
				<option value="x7">X7</option>
			</select><br><br>
				<button type="submit" class="btn btn-success">Search</button>
		</form>
</div>
<div class="table_div">
	<table>
		<tr>
			<th>Title</th>
			<th>Model</th>
			<th>Price</th>
			<th>Speed</th>
		</tr>
		<tr>
			<td><?=$cars['title']?></td>
			<td><?=$cars['model']?></td>
			<td><?=$cars['price']?></td>
			<td><?=$cars['speed']?></td>
		</tr>
	</table>
</div>

<style>
	body{
		width:100%;
		height:100%;
		background-color: #cccccc;
	}
	.form_div{
		width:50%;
		height:20%;
		float: left;
		padding:2% 2%;
		font-size:130%;
		text-align:center;
		background-color: darkgrey;
	}
#car_model{
	width:15%;
	height:2%;
}
	#car_title{
		width:15%;
		height:2%;
	}
	.table_div{
		width:50%;
		height:20%;
		float: right;
		padding:2% 2%;
		font-size:120%;;
		text-align:center;
		background-color: darkgrey;
	}
	table, tr, td{
		border:1px solid white;
	}
	th{
		border:1px solid white;
	}
</style>
</body>
</html>
