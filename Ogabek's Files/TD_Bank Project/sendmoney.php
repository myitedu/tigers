<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Money</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<div class="container-fluid">
    <?if (isset($_GET['msg'])):?>
        <div class="alert alert-success"><?=$_GET['msg']??null?></div>
    <?endif;?>
    <div class="topdiv">
        <i class="fas fa-donate fa-3x"></i><br><span class="donate"><h2>Send Money with Zelle®</h2></span>
    </div>
    ​
    <form method="get" action = "sendbackend.php" class="middlediv">
        <div class="text">
            <p> It's free to send and receive money
                for TD Bank customers
            </p>
        </div>
        <div class="donationform">
            ​
            <div id="form">
                <h3>Sender Person</h3>
                <form method="get" action = "sendbackend.php">
                    <p>
                        <label> First Name</label> <input class="firstname" name="first_name" placeholder="Zuhra" required>
                    </p>
                    <p>
                        <label>Last Name</label> <input class="lastname" name="full_lastname" placeholder="Maksudi" required>
                    </p>
                    <p>
                        <label>Email</label> <input class="email" name="email" placeholder="Email" required>
                    </p>
                    <p>
                        <label>Amount</label> <input class="amount" type="number" id="quantity" min="1" max="10000" required>
                    </p>
                    ​ ​
                </form>
            </div>
            <div id="box">
                <h3>Receiver Person</h3>
                <p>
                    <label> First Name</label> <input class="firstname" placeholder="Fatima" required>
                </p>
                <p>
                    <label>Last Name</label> <input class="lastname" placeholder="Maksudi" required>
                </p>
                <p>
                    <label>Email</label> <input class="email" name="email" placeholder="Email" required>
                </p>
            </div>
            <div class="donate-button">
                <input name="is_form_submitted" value="1" type="hidden">
                <button type="submit" class="btn btn-success">Send now</button>
            </div>
        </div>
    </form>
</div>
​
​
</div>
</body>
<style>
    html, body{
        height:100%;
        width:100%;
    }
    .container-fluid{
        height:100%;
        width:75%;
    }
    .topdiv{
        width:100%;
        height:200px;
        background-color: #19571e;
        text-align: center;
        padding-top:40px;
        padding-bottom:30px;
    }
    .fa-donate{
        color:whitesmoke;
        position:relative;
        bottom:12px;
    }
    .donate{
        color:whitesmoke;
    }
    .donationform{
        padding:30px;
    }
    #box{
        width:50%;
        height:75%;
        float:right;
        text-align:center;
    }
    #form{
        width:50%;
        float: left;
        height:75%;
        text-align:center;
    }
    .middlediv{
        background-color: whitesmoke;
        height:80%;
    }
    .text{
        margin-left: 60px;
        margin-right:60px;
        text-align: center;
        font-size: large;
    }
    h3{
        text-align: center;
        ​
    }
    p{
        padding-top:10px;
    }
    .firstname{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
    }
    .lastname{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
    }
    .email{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
        position:relative ;
        left:20px;
    }
    .amount{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
        position: relative;
        left:14px;
    }
    .donate-button {
        ​
        width: 25%;
        color: white;
        text-align: center;
        padding:12px;
        margin:30px auto;
        font-size: 18px;
        cursor: pointer;
        font-weight: 800;
    }
    ​
    ​
</style>
</html>

