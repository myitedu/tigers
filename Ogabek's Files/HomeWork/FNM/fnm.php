<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>The Top Movies in The Our FNM</title>
	<link rel="stylesheet" href="fnmcss.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/fontawesome/css/all.css">
	<script src="/js/bootstrap.js"></script>
</head>
<body>

<?php
include "fnmbackend.php";
?>
<!--- Top Menu --->

<div id="top_div">
	<form method="get">
		<a href="#">HOME</a>
		<label>Search:</label>
		<input type="search" size="50" name="keyword" placeholder="Search FNM" value="<?=$movies?>" required>
		<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
		<a href="https://www.imdb.com/">IMDB</a>
	</form>
</div>

<!--- Hole Div --->

<div id="container-fluid">
	
	<!--- First Box --->
	
	<div id="box_1">
		<a href="https://www.amazon.com/dp/B085SW2PFQ">
			<img class="img_1" src=https://images-na.ssl-images-amazon.com/images/G/01/shazam/HOCO-S2-01837-IMDBStaticBillboard-970x250-POST-Final-en-US-HO-PVD4582-63821-8c424fb9-ff42-4b26-80a2-abee8f7f623c.jpg" alt="">
		</a>
	</div>
	<hr>
	
	<!--- Box_2 Div --->
	
	<div class="box_2">
		<a href="<?=$Titanic->trailer->link?>">
			<img class="img_2" src="<?= $Titanic->poster ?>" alt="">
		</a>
	</div>
	
	<!--- Box_3 Div and Table --->
	<!---
	"id":"tt4126476"
"title":"After "
"year":"2019"
"length":"1h 45min"
"rating":"5.4"
"rating_votes":"22887"
   ---->
	<div class="box_3">
		
		<table>
			<tr><td><a><i class="fa fa-heading"></i>  Title:  </a><a><?=$Titanic->title?></a></td></tr>
			<tr><td><a><i class="fa fa-calendar-day"></i>  Year:  </a><a><?=$Titanic->year?></a></td></tr>
			<tr><td><a><i class="fa fa-business-time"></i>  Length:  </a><a><?=$Titanic->length?></a></td></tr>
			<tr><td><a><i class="fa fa-volume-up"></i>  Rating:  </a><a><?=$Titanic->rating?></a></td></tr>
			<tr><td><a><i class="fa fa-vote-yea"> </i>  Rating_votes:  </a><a><?=$Titanic->rating_votes?></a></td></tr>
		</table>
	</div>
	<div class="box_4">
		<a href="https://www.imdb.com/">
			<h4><?=$Titanic->title?></h4>
		</a>
		<hr>
		<p><?=$Titanic->plot?></p>
	</div>
</div>
<div id="bottom_div">
	<div class="box_6">
		<a href="#">Get the FNM App</a>
		<a href="#">Help</a>
		<a href="#">Site Index</a>
		<a href="#">FNMPro</a>
		<a href="#">FNM TV</a>
		<a href="#">Box Office Mojo</a>
		<a href="#">FNM Developers</a>
	</div>
	<div class="box_7">
		<p>2000-2020 by FNM.com, Inc.</p>
	</div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>