<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>How to Get Information about Your Instagram account??</title>
		<link rel="stylesheet" href="instagram.css">
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/fontawesome/css/all.css">
		<script src="/js/jquery.js"></script>
</head>
<body>
<?php include 'insapi.php'; ?>
<div class="container-fluid">
 <div class="header">
	 <form method="post">
	<h4>Instagram</h4>
	 <input class="input" type="text" name="user_name" value="<?=$username?>" placeholder="Search">
	 <button type="submit" >See</button>
	 </form>
 </div>
	<div class="profile">
		<img class="profile_img" src="<?=$post->profile_pic_url?>" alt="">
	</div>
	<div class="biography">
	<table class="my_table">
		<tr>
			<th>Us.name</th>
			<th>Followers</th>
			<th>Following</th>
			<th>Total Post</th>
			<th>Private ?</th>
		</tr>
		<tr>
			<td><?=$post->username?></td>
			<td><?=$post->follower?></td>
			<td><?=$post->following?></td>
			<td><?=$post->total_post?></td>
			<td><?=$post->is_private?></td>
		</tr>
	</table>
	</div>
	<div class="posts">
		<div class="box-1">
			<img class="post_img" src="<?=$post->last_post[0]->display_url?>" alt=""><br>
			<p class="fa fa-heart">Likes:<?=$post->last_post[0]->like?></p>
			<p class="fa fa-comment">Comment:<?=$post->last_post[0]->comment?></p>
		</div>
		<div class="box-2">
			<img class="post_img" src="<?=$post->last_post[1]->display_url?>" alt=""><br>
			<p class="fa fa-heart">Likes:<?=$post->last_post[1]->like?></p>
			<p class="fa fa-comment">Comment:<?=$post->last_post[1]->comment?></p>
		</div>
		<div class="box-3">
			<img class="post_img" src="<?=$post->last_post[2]->display_url?>" alt=""><br>
			<p class="fa fa-heart">Likes:<?=$post->last_post[2]->like?></p>
			<p class="fa fa-comment">Comment:<?=$post->last_post[2]->comment?></p>
		</div>
	</div>
</div>
</body>
</html>