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
<div class="header1">
    <img class="foto-logo" src="http://www.web-savvy-marketing.com/wp-content/uploads/2013/11/Online-Shopping-Bags.jpg">
    <h4>Online Xarid Dukoni</h4>
    <form method="get">
        <input type="search" name="keyword" value="<?=$keyword?>">
        <button type="submit" class="btn btn-success">Izlash</button>
    </form>
</div>
<div class="container-fluid">
    <table>
        <tr>
            <td id="td1"><img style="background-color: red" src="<?=$arrays->products[0]->thumbnail?>"</td>
            <td id="td2"><a><i class="fa fa-heading"></i>  Sarlavha:  </a><a><?=$arrays->products[0]->title?></a></td>
            <td id="td3"><a> <i class="fa fa-money-bill"></i>  Narx:  $ </a><a><?=$arrays->products[0]->price?></a> </td>
            <td id="td3"><a><i class="fa fa-level-up-alt"></i>  Daraja:   </a><a><?=$arrays->products[0]->rating?></a> </td>
            <td id="td3"><a><i class="fa fa-street-view"></i>  Tomoshabin:   </a><a><?=$arrays->products[0]->reviews?></a> </td>
            <td id="td4"><a href="<?=$arrays->products[0]->url?>"><button>  Sotib Olish:</button></a> </td>
        </tr>
        <tr>
            <td id="td1"><img src="<?=$arrays->products[1]->thumbnail?>"</td>
            <td id="td2"><a><i class="fa fa-heading"></i>  Sarlavha:  </a><a><?=$arrays->products[1]->title?></a></td>
            <td id="td3"><a> <i class="fa fa-money-bill"></i>  Narx:  $ </a><a><?=$arrays->products[1]->price?></a> </td>
            <td id="td3"><a><i class="fa fa-level-up-alt"></i>  Daraja:   </a><a><?=$arrays->products[1]->rating?></a> </td>
            <td id="td3"><a><i class="fa fa-street-view"></i>  Tomoshabin:   </a><a><?=$arrays->products[1]->reviews?></a> </td>
            <td id="td4"><a href="<?=$arrays->products[1]->url?>"><button>  Sotib Olish:</button></a> </td>
        </tr>
        <tr>
            <td id="td1"><img src="<?=$arrays->products[2]->thumbnail?>"</td>
            <td id="td2"><a><i class="fa fa-heading"></i>  Sarlavha:  </a><a><?=$arrays->products[2]->title?></a></td>
            <td id="td3"><a> <i class="fa fa-money-bill"></i>  Narx:  $ </a><a><?=$arrays->products[2]->price?></a> </td>
            <td id="td3"><a><i class="fa fa-level-up-alt"></i>  Daraja:   </a><a><?=$arrays->products[2]->rating?></a> </td>
            <td id="td3"><a><i class="fa fa-street-view"></i>  Tomoshabin:   </a><a><?=$arrays->products[2]->reviews?></a> </td>
            <td id="td4"><a href="<?=$arrays->products[2]->url?>"><button>  Sotib Olish:</button></a> </td>
        </tr>
        <tr>
            <td id="td1"><img src="<?=$arrays->products[3]->thumbnail?>"</td>
            <td id="td2"><a><i class="fa fa-heading"></i>  Sarlavha:  </a><a><?=$arrays->products[3]->title?></a></td>
            <td id="td3"><a> <i class="fa fa-money-bill"></i>  Narx:  $ </a><a><?=$arrays->products[3]->price?></a> </td>
            <td id="td3"><a><i class="fa fa-level-up-alt"></i>  Daraja:   </a><a><?=$arrays->products[3]->rating?></a> </td>
            <td id="td3"><a><i class="fa fa-street-view"></i>  Tomoshabin:   </a><a><?=$arrays->products[3]->reviews?></a> </td>
            <td id="td4"><a href="<?=$arrays->products[3]->url?>"><button>  Sotib Olish:</button></a> </td>
        </tr>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="Amazon.php">1</a></li>
                <li class="page-item"><a class="page-link" href="Amazon1.php">2</a></li>
                <li class="page-item">
                    <a class="page-link" href="Amazon1.php" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </table>
</div>
<style>
    .container-fluid{
        background-color: rgba(232, 227, 227, 0.84);
        width:90%;
    }
    #td1 img{
        position:relative;
        top:-20px;
    }
    #td1{
       left:200px;
        position: relative;
    }
     button{
         background-color: #4dcc7d;
     }
    #td4{
        width:200px;
        bottom:50px;
        left:-500px;
        top:80px;
        position:relative;
    }
    #td3{
        left:-100px;
        position:relative;

    }
  #td2{
      top:-100px;
      left:250px;
      position:relative;
  }
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
    table,tr,td{
        padding:10px;
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
