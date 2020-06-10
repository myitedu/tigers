<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> TD bank</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
$parms=null;
if(isset($_POST['is_form_submitted'])&&$_POST['is_form_submitted']==1){
    $parms=$_POST;
    $email=$parms['email']??null;
    $password=$parms['password']??null;
    if($email=='otajonburxonov99@gmail.com' && $password=='12345'){
        $msg="you are logged in successfully";
        header('Location:wwww.php?msg='.$msg);
    }
    else{
        $msg="Your email or password is incorrect.Please try again!";
        header('Location:otajon.php.php?msg='.$msg);
    }
}
?>
<div class="container-fluid">
    <h2>Login Page</h2>

    <?if (isset($_GET['msg'])):?>
        <div style="background-color:lightcoral" class="alert alert-success">
            <?=$_GET['msg']?>
        </div>
    <?endif;?>

    <form method="post">
        <table class="table">
            <tr>
                <td>Username</td>
                <td><input required="required" name="email" type="email" placeholder="Your username" </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input required="required" name="password" type="password" placeholder="Your password" </td>
            </tr>
            <tr>
                <td class="last_td" colspan="2">
                    <input name="is_form_submitted" value="1" type="hidden">
                    <button class="btn btn-dark" type="reset">Reset</button>
                    <button class="btn btn-success" type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<style>
    .container-fluid{
        width:600px;
        text-align:center;
        margin:50px auto;
        background-color: rgba(83, 77, 77, 0.26);
        border:1px solid black;
    }
    .last_td{
        text-align: center;
    }
</style>
</body>
</html>

