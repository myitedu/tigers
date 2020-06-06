<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/fontawesome/css/all.css">
		<script src="/js/jquery.js"></script>
</head>
<body>
<div id="container-fluid">
		<div id="header">
				<img class="logo" src="https://d1yjjnpx0p53s8.cloudfront.net/onlineshopping.png" alt="">
				<h4>Welcome Back</h4>
		</div>
		<div id="menu">
				<?if (isset($_GET['msg'])):?>
						<div class="alert alert-success"><?=$_GET['msg']?></div>
				<?endif;?>
		</div>
</div>


<style>
		body{
				background-color:navajowhite !important;
		}
		#container-fluid{
				width:80%;
				height:600px;
				margin:0 auto;
				background-color: #e7e4e4;
		}
		.logo{
				width:7%;
				height:70px;
		}
		#header{
				width:100%;
				height:60px;
				background-color:lightseagreen;
		}
		#menu{
				width:50%;
				height:200px;
				margin:30px auto;
				padding:20px 10px;
				text-align: center;
				border-radius:5%;
				border-bottom:2px solid #555;
				background-color: #d7d4d4;
		}
		h4{
				margin-left:25%;
				position:relative;
				top:-91%;
				font-family:Sans-Serif;
				font-size:220%;
		}
		#menu input{
				background-color: #e2e1e1;
				border-radius:5px;
				box-shadow:2px 2px 2px 2px #8181ff;
				border:1px solid #2727fe;
		}

</style>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
