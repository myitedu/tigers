<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<div id="container-fluid">
    <div id="header">
        <img class="logo" src="https://turnersyndromefoundation.org/wp-content/uploads/2018/08/td-bank-1-logo.png" alt="">
        <h4>Welcome to TD Bank</h4>
    </div>
    <div id="menu">
        <div class="box1">
            <img class="img" src="https://www.dlf.pt/png/big/5/51669_message-logo-png.png" alt="">
            <a href="sendmoney.php">SEND_MONEY</a>
        </div>
        <div class="box2">
            <img class="img" src="https://logodix.com/logo/919946.png" alt="">
            <a href="paybill.php">PAY_BILL</a>
        </div>
        <div class="box3">
            <img class="img" src="https://i.ya-webdesign.com/images/32x32-png-icons-free-download-6.png" alt="">
            <a href="transfer.php">TRANSFER</a>
        </div>
    </div>
    <div id="middle"></div>
</div>

<style>
    .img{
        width:70%;
        height:50px;
    }
    .box1{
        width:10%;
        height:80px;
        display: inline-block;
        position:relative;
        top:-20px;
        margin-right:65%;
    }
    .box2{
        width:10%;
        height:80px;
        display: inline-block;
        position:relative;
        top:-97px;
        margin-left:20%;
    }
    .box3{
        width:10%;
        height:80px;
        display: inline-block;
        position:relative;
        top:-97px;
        margin-left:20%;
    }
    #middle{
        width:100%;
        height:400px;
    }
    body{
        height:550px;
        background-color: #375037 !important;
    }
    #container-fluid{
        width:80%;
        height:600px;
        margin:0 auto;
        background-image: url("https://images.squarespace-cdn.com/content/v1/54714504e4b0c4ebc4ddfadc/1444315644986-5F0B09DA6YMYD3D7XXIH/ke17ZwdGBToddI8pDm48kFS6Dtt2YXQjpuop5AwJZ7h7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UTuwpcQ7SDFVyTf6LPMPJ3YvQtcJQd3ODjAH4PcRHtjAZDqXZYzu2fuaodM4POSZ4w/image-asset.png");
        background-repeat: no-repeat;
        background-size:100% 100%;
    }
    .logo{
        width:10%;
        height:70px;
        position: relative;
        top:-5px;
        display: inline-block;
    }
    #header{
        width:100%;
        height:60px;
        background-color:darkgreen;
    }
    #menu{
        width:100%;
        height:80px;
        margin:0 auto;
        padding:20px 10px;
        text-align: center;
        border-bottom:2px solid #555;
        background-color: green;
    }
    h4{
        margin-left:25%;
        position:relative;
        top:-103%;
        font-family:Sans-Serif;
        font-size:220%;
    }
</style>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>

