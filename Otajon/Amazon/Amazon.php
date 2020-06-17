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
       <h4>Online Xarid Dukoni</h4>
   </div>
    <form method="get">
        <input type="search" name="keyword" value="<?=$keyword?>">
        <button type="submit" class="btn btn-success">Izlash</button>
    </form>
    <table>
        <tr>
            <td><img src="<?=$arrays->products[0]->thumbnail?>"</td>
            <td><a>Narx:  $ </a><a><?=$arrays->products[0]->price?></a> </td>
            <td><a href="<?=$arrays->products[0]->url?>"><button>Sotib Olish:</button></a> </td>
        </tr>
        <tr>
            <td><img src="<?=$arrays->products[1]->thumbnail?>"</td>
            <td><a>Narx:  $ </a><a><?=$arrays->products[1]->price?></a> </td>
            <td><a href="<?=$arrays->products[1]->url?>"><button>Sotib Olish:</button></a> </td>
        </tr>
        <tr>
            <td><img src="<?=$arrays->products[2]->thumbnail?>"</td>
            <td><a>Narx:  $ </a><a><?=$arrays->products[2]->price?></a> </td>
            <td><a href="<?=$arrays->products[2]->url?>"><button>Sotib Olish:</button></a> </td>
        </tr>
        <tr>
            <td><img src="<?=$arrays->products[3]->thumbnail?>"</td>
            <td><a>Narx:  $ </a><a><?=$arrays->products[3]->price?></a> </td>
            <td><a href="<?=$arrays->products[3]->url?>"><button>Sotib Olish:</button></a> </td>
        </tr>
        <tr>
    </table>
</div>
<style>
    table,th,td{
        padding:30px;
    }
    .header1 h4{
        text-align: center;
    }
   .header1{
       width:100%;
       height:60px;
       background-color:#b0ceea;
   }
</style>
</body>
</html>
