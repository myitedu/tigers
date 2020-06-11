<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Top Movies in The Our FNM</title>
    <link rel="stylesheet" href="movie.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/bootstrap.js"></script>
</head>
<body>
<?php
include "imdb_API.php";
?>
<!--- Top Menu --->

<div id="top_div">
    <form method="get">
        <a href="https://www.imdb.com/?ref_=nv_home"><img style="width:100px; height: 40px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/IMDB_Logo_2016.svg/1200px-IMDB_Logo_2016.svg.png"></a>
        <label>Search:</label>
        <input type="search" id="movies" name="movies" size="50" placeholder="Search the web..." value="<?=$movies?>" required>
        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
        <a href="#"></a>
    </form>
</div>

<!--- Hole Div --->

<div id="container-fluid">

    <!--- First Box --->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%; height:320px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="https://www.amazon.com/dp/B085SW2PFQ">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/shazam/HOCO-S2-01837-IMDBStaticBillboard-970x250-POST-Final-en-US-HO-PVD4582-63821-8c424fb9-ff42-4b26-80a2-abee8f7f623c.jpg" class="d-block w-100" alt="">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.amazon.com/dp/B0884S38JG?ref=dvm_us_jm_as_imdb_pcqcbwn0605GBRIS1US">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/shazam/GBRI-S1-01928-IMDBStaticBillboard-970x250-POST-Final-en-US-HO-PVD4272-65947-65981bf7-675c-41da-9dca-25c669fe976c.jpg" class="d-block w-100" alt="">
                </a>
            </div>

            <div class="carousel-item">
                <a href="https://www.amazon.co.uk/gp/video/detail/B07G9PHJH9">
                    <img src="https://images-na.ssl-images-amazon.com/images/G/01/shazam/MRSM-S3-01465-PMHouse-970x250-POST-Final-en-US-HO-PVD3356-t44Gf-90a56fea-3dfd-43db-acc3-f4870f6de319.jpg" class="d-block w-100" alt="">
                </a>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--- Box_2 Div --->

    <div class="box_2">
            <a href="<?=$Titanic->trailer->link?>"><img class="img_2" src="<?= $Titanic->poster ?>"></a>
    </div>
    <div class="box_3" style="background-color:#B2AFADAD;">
        <table>
            <tr><td><a><i class="fa fa-heading"></i>  Title:  </a><a><?=$Titanic->title?></a></td></tr>
            <tr><td><a><i class="fa fa-calendar-day"></i>  Year:  </a><a><?=$Titanic->year?></a></td></tr>
            <tr><td><a><i class="fa fa-business-time"></i>  Length:  </a><a><?=$Titanic->length?></a></td></tr>
            <tr><td><a><i class="fa fa-volume-up"></i>  Rating:  </a><a><?=$Titanic->rating?></a></td></tr>
            <tr><td><a><i class="fa fa-vote-yea"> </i>  Rating_votes:  </a><a><?=$Titanic->rating_votes?></a></td></tr>
        </table>
    </div>
    <div class="box_4" style="background-color:#B2AFADAD;">
        <a >
            <h4><?=$Titanic->title?></h4>
        </a>
        <hr>
        <p><?=$Titanic->plot?></p>
    </div>
</div>
<div id="bottom_div">
    <div class="box_6">
        <a href="">Get the FNM App</a>
        <a href="">Help</a>
        <a href="">Site Index</a>
        <a href="">FNMPro</a>
        <a href="">FNM TV</a>
        <a href="">Box Office Mojo</a>
        <a href="">FNM Developers</a>
    </div>
    <div class="box_7">
        <p>2000-2020 by FNM.com, Inc.</p>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
