<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Google Translate</title>
	<link rel="stylesheet" href="www.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<?php
include "www2.php";
?>
<div id="container-fluid">
	<div id="header">
		<a style="text-decoration:none;" href="https://translate.google.com/">
		<i class="fa fa-bars"></i>
		<img class="google" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png" alt="">
		<h4>Translate</h4>
		</a>
	</div>
	<div class="box_1">
	
	</div>
	<form method="get">
	<div id="menu">
		<div class="left_div">
			<label>Enter Country Code:</label>
			<p>From:</p><input type="text" name="enter_code1" placeholder="Enter Code" value="<?=$country1?>" required><br>
		</div>
		<div class="right_div">
			<label>Enter Country Code:</label><br>
			<p>To:</p><input type="text" name="enter_code2" placeholder="Enter Code" value="<?=$country2?>" required><br>
		</div>
		<div class="bottom_div">
			<label>Write Words / Sentence:</label><br>
			<input type="text" name="enter_code3" placeholder="Write Word / Sentence" value="<?=$country3?>" required><br>
			<button type="submit" class="btn btn-success">Translate</button>
		</div>
		<div class="result">
		   <h4>Result:</h4><br>
			<?=$product["result"]?>
		</div>
	</div>
		<div class="box_2"><a style="text-decoration:none; ; color: black" href=""><i class="fa fa-language"></i><h6>Text</h6></a></div>
		<div class="box_3"><a style="text-decoration:none; ; color: black" href=""><i class="fa fa-file fa-sm"></i><h5>Documents</h5></a></div>
	</form>
	<div id="table_div">
		<table>
			<tr>
				<th style="width:40%; text-align: center">Country Code:</th>
				<th style="width:40%; text-align: center"">Country:</th>
				<th style="width:40%; text-align: center"">Country Lan'g Code:</th>
			</tr>
			<tr>
				<td>UZ</td>
				<td>Uzbekistan</td>
				<td>uz, kaa</td>
			</tr>
			<tr>
				<td>US</td>
				<td>United States </td>
				<td>en</td>
			</tr>
			<tr>
				<td>AE</td>
				<td>United Arab Emirates:</td>
				<td>ar</td>
			</tr>
			<tr>
				<td>RU</td>
				<td>Russia</td>
				<td>ru</td>
			</tr>
			<tr>
				<td>TR</td>
				<td>Turkey</td>
				<td>tr</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>