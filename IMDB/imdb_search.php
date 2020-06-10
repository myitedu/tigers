<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<?php
include 'imdb_API.php';
?>
<div class="container-fluid">
    <div class="fixed-top">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form method="GET">
                <input id="movies" name="movies" autocomplete="off" tabindex="-1" type="text" placeholder="Search the web...">
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </nav>
    </div>
    <a class="www"><a><img class="poster" src="<?= $Titanic->poster ?>"</a></a>
    <table class="table table-bordered">
        <tr><td><a><i class="fa fa-heading"></i>  Title:  </a><a><?=$Titanic->title?></a></td></tr>
        <tr><td><a><i class="fa fa-calendar-day"></i>  Year:  </a><a><?=$Titanic->year?></a></td></tr>
        <tr><td><a><i class="fa fa-business-time"></i>  Length:  </a><a><?=$Titanic->length?></a></td></tr>
        <tr><td><a><i class="fa fa-volume-up"></i>  Rating:  </a><a><?=$Titanic->rating?></a></td></tr>
        <tr><td><a><i class="fa fa-vote-yea"> </i>  Rating_votes:  </a><a><?=$Titanic->rating_votes?></a></td></tr>
        <tr><td><a><i class="fa fa-info"></i>  Plot:  </a><a><?=$Titanic->plot?></a></td></tr>
        <tr><td><a href="<?= $Titanic->trailer->link ?>"><button>Watch_Movies</button></a></td></tr>
    </table>
</div>
<style>
    .container-fluid{
        margin-top:70px;
        width:100%;
        height: 100%;
    }
    .fixed-top{
        width:100%;
        height:70px;
    }
    .www{
        float:left;
        position:relative;
    }
    .table{
        width:40%;
        height: 500px;
        right:600px;
        float:right;
        position:relative;
    }
    .poster{
        width:300px;
        height:500px;
    }
</style>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
