<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js.jquery.js"></script>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<div class="container-fluid">
<?php
include "backend.php";
?>
<div class="top">
    <div id="tiktok"><h5>Tik Tok</h5></div>
    <img class="tiktokimg" src="https://b.thumbs.redditmedia.com/148QYZRqpuU89nj_zVl1lffczGPIBOePskRnhwTQ0JA.png">
    <div class="search">
        <form method="get">
            <p>
                <label>Search: </label>
                <input type="search" id="videos" name="videos" size="50" placeholder="Search the web..." value="<?=$videos?>" required>
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
            </p>
        </form>
    </div>
</div>
<div class="leftside">
    <a href="https://www.tiktok.com/trending?lang=en">    For you  </a>
    <hr>
    <a href="https://www.tiktok.com/discover?lang=en">   Discover  </a>
    <hr>
    <a href="https://www.tiktok.com/following?lang=en">   Following  </a>
</div>
<div class="results">
    <span><a href="https://www.tiktok.com/@<?=$tiktok->media[0]->author->uniqueId?>?loginType=repeatLogin&lang=en"><img style="border-radius:50%; width:70px; height:70px;" src="<?=$tiktok->media[0]->author->avatarThumb?>"</a>
    <a style="text-decoration:none; color:purple;" href="https://www.tiktok.com/@<?=$tiktok->media[0]->author->uniqueId?>?loginType=repeatLogin&lang=en"><?=$tiktok->media[0]->author->nickname?></a>
    <button>Follow</button><br></span>
    <a class="decription"><?=$tiktok->media[0]->description?></a><br>
    <iframe class="video" src="<?= $tiktok->media[0]->video->playAddr?>"></iframe><br>
    <a class="share"> <i style="color:darkred" class="fa fa-share "></i>Share:<?=$tiktok->media[0]->statistics->shareCount?></a>
    <a class="comment"> <i style="color:red" class="fa fa-comment"></i>Comment:<?=$tiktok->media[0]->statistics->commentCount?></a>
</div>


    <div class="results1">
        <span><a href="https://www.tiktok.com/@<?=$tiktok->media[1]->author->uniqueId?>?loginType=repeatLogin&lang=en"><img style="border-radius:50%; width:70px; height:70px;" src="<?=$tiktok->media[1]->author->avatarThumb?>"</a>
    <a style="text-decoration:none; color:purple;" href="https://www.tiktok.com/@<?=$tiktok->media[1]->author->uniqueId?>?loginType=repeatLogin&lang=en"><?=$tiktok->media[1]->author->nickname?></a>
            <button>Follow</button><br></span>
        <a class="decription"><?=$tiktok->media[1]->description?></a><br>
        <iframe class="video" src="<?= $tiktok->media[1]->video->playAddr?>"></iframe><br>
        <a class="share"> <i style="color:darkred" class="fa fa-share "></i>Share:<?=$tiktok->media[1]->statistics->shareCount?></a>
        <a class="comment"> <i style="color:red" class="fa fa-comment"></i>Comment:<?=$tiktok->media[1]->statistics->commentCount?></a>
    </div>
   <?=
   $text="Hello,How are you? Thanks for asking,I am good.";
   $sobachka=strpos($text,' Thanks');
   $result1=substr($text, 0, $sobachka);
   $length1=strlen($result1);
   $length2=strlen($text);
   $result=substr($text,$length1,$length2);
   var_dump($result);
   echo"<hr>";
    ?>
    <div class="results2">
        <span><a href="https://www.tiktok.com/@<?=$tiktok->media[2]->author->uniqueId?>?loginType=repeatLogin&lang=en"><img style="border-radius:50%; width:70px; height:70px;" src="<?=$tiktok->media[2]->author->avatarThumb?>"</a>
            <a style="text-decoration:none; color:purple;" href="https://www.tiktok.com/@<?=$tiktok->media[2]->author->uniqueId?>?loginType=repeatLogin&lang=en"><?=$tiktok->media[2]->author->nickname?></a>
            <button>Follow</button><br></span>
        <a class="decription"><?=$tiktok->media[2]->description?></a><br>
        <iframe class="video" src="<?= $tiktok->media[2]->video->playAddr?>"></iframe><br>
        <a class="share"> <i style="color:darkred" class="fa fa-share "></i>Share:<?=$tiktok->media[2]->statistics->shareCount?></a>
        <a class="comment"> <i style="color:red" class="fa fa-comment"></i>Comment:<?=$tiktok->media[2]->statistics->commentCount?></a>
    </div>
</div>
</body>
<style>
    }
    body{
        height:auto;
        width:100%;
    }
    .top{
        width: 100%;
        height: 75px;
        border-collapse: collapse;
        background-color: #000000;
        padding:38px;
        color: whitesmoke;
    }
    .search{
        position:relative;
        left:200px;
        bottom:95px;
    }
    #tiktok{
        position: relative;
        left:27px;
        bottom:6px;

    }
    .tiktokimg{
        height: 50px;
        width:50px;
        position:relative;
        bottom: 57px;
        right: 21px;

    }
    .results{
        width:75%;
        float: right;
        background-color:#d2cecd ;
        height:100%;
        text-align: center;
        position:relative;
        margin-bottom:10px;
    }
    .results1{
        width:75%;
        float: right;
        background-color:#d2cecd ;
        height:100%;
        text-align: center;
        position:relative;
        margin-bottom:10px;
    }
    .results2{
        width:75%;
        float: right;
        background-color:#d2cecd ;
        height:100%;
        text-align: center;
        position:relative;
    }
    .leftside{
        width:23%;
        float: left;
        margin-top:30px;
        margin-left: 2%;
        background-color: white;
        height:75%;
    }
    .video{
        height:250px;
        width:50%;
    }
    .share{
        position: relative;
        margin: 20px;
    }
    .comment{
        position: relative;
        margin: 20px;
    }
</style>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>
