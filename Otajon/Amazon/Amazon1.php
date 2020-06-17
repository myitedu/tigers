<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazon</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<?php
include 'backend.php';
?>
<div class="container-fluid">
    <div class="header1">
        <img class="foto-logo" src="http://www.web-savvy-marketing.com/wp-content/uploads/2013/11/Online-Shopping-Bags.jpg">
        <h4>Online Xarid Dukoni</h4>
        <form method="get">
            <input type="search" name="keyword" value="<?=$keyword?>">
            <button type="submit" class="btn btn-success">Izlash</button>
        </form>
    </div>


    <table>
        <tr>
           for(i=0,i<10,i++)
            {
            <td><img src="<?=$arrays->products[0]->thumbnail?>"</td>
            <td><a>Title:  </a><a><?=$arrays->products[0]->title?></a></td>
            <td><a>Narx:  $ </a><a><?=$arrays->products[0]->price?></a> </td>
            <td><a>Rating:   </a><a><?=$arrays->products[0]->rating?></a> </td>
            <td><a>Review:   </a><a><?=$arrays->products[0]->reviews?></a> </td>
            <td><a href="<?=$arrays->products[0]->url?>"><button>Sotib Olish:</button></a> </td>
            }

        </tr>
    </table>

</div>
<style>
    .foto-logo{
        width:200px;
        height:100px;
        position:absolute;
        padding:5px;
    }
    input{
        width:600px;
        height:30px;
        padding:18px;
        margin-top:10px;
        text-align: center;
        margin-left:400px;
    }
    table,th,td{
        padding:30px;
    }
    .header1 h4{
        text-align: center;
    }
    .header1{
        width:100%;
        height:100px;
        background-color:#b0ceea;
    }
</style>
</body>
</html>
