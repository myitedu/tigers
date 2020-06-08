<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="homework.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<?php
$parms = null;
if (isset($_POST['is_form_submitted']) && $_POST['is_form_submitted'] == 1){
    $parms = $_POST;
    $user_name = $parms['user_name']??null;
    $password = $parms['password']??null;

    if ($user_name == 'otajonburxonov99@gmail.com' && $password == '12345'){
        $msg = "You are logged in sucessfully";
        header ('Location: home.php?msg='.$msg);
    }else{
        $msg = "Sorry Your Username or password is incorrect please try again";
        header ('Location: form.php?msg='.$msg);
        exit;
    }
}
?>
<div id="container-fluid">
    <?if(isset($_GET['msg'])):?>
        <div class="alert alert-danger">
            <?=$_GET['msg']??null?></div>
    <?endif;?>
    <div id="header">
        <img class="logo" src="https://turnersyndromefoundation.org/wp-content/uploads/2018/08/td-bank-1-logo.png" alt="">
        <h4>Welcome to TD Bank</h4>
    </div>
    <div id="menu">
        <form method="post">
            <p>
                <lable>Username:</lable>
                <input type="text" name="user_name" placeholder="Enter Your Username" required></p>
            <hr>
            <p>
                <lable>Password:</lable>
                <input type="password" name="password" placeholder="Enter Your Password" required><br></p>
            <p>
                <lable>Remind me:</lable>
                <input type="checkbox">
            </p>
            <p>
                <input type="hidden" name="is_form_submitted" value="1">
                <button type="reset" class="btn btn-dark">Reset</button>
                <button type="submit" class="btn btn-success">Login</button>
            </p>
        </form>
    </div>
</div>

<style>
    html, body{
        height:100%;
        width:100%;
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
        background-color:green;
    }
    #menu{
        width:50%;
        height:230px;
        margin:30px auto;
        padding:20px 10px;
        text-align: center;
        border-radius:5%;
        border-bottom:2px solid #555;
        background-color:#7ab386;
    }
    h4{
        margin-left:25%;
        position:relative;
        top:-103%;
        font-family:Sans-Serif;
        font-size:220%;
    }
    #menu input{
        background-color:#98c79e;
        border-radius:5px;
        box-shadow:2px 2px 2px 2px #8181ff;
        border:1px solid #2727fe;
    }
</style>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>

