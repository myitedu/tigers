<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<div class="container-fluid">
    <div class="topdiv">
        <i class="fas fa-donate fa-3x"></i><span class="donate"><h2>Donate Towards the  Victims of COVID-19</span>
    </div>

    <div class="middlediv">
        <div class="text">
            <p> People and organizations who want to help fight the pandemic and
                support can now donate through the COVID-19 Solidarity Response Fund.
                Every dollar will go towards helping the communities effected by Covid-19.
            </p>
        </div>
        <div class="donationform">
            <?if (isset($_GET['msg'])):?>
                <div class="alert alert-success"><?=$_GET['msg']??null?></div>
            <?endif;?>
            <h3>Donation Form</h3>
            <div id="form">
                <form method="get" action = "Fotima1.php">
                    <p>
                        <label> First Name</label> <input class="firstname" name="first_name" placeholder="John" required>
                    </p>
                    <p>
                        <label>Last Name</label> <input class="lastname" name="full_lastname" placeholder="Doe" required>
                    </p>
                    <p>
                        <label>Email</label> <input class="email" name="email" placeholder="Email" required>
                    </p>
                    <p>
                        <label>Amount</label> <input class="amount" type="number" id="quantity" min="1"  required>
                    </p>
                    <div class="donate-button">
                        <button style="background-color:#e05c5c;" type="submit"> Donate Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
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
        background-color:#974d44;
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
    form{
        text-align:center;
    }
    .middlediv{
        background-color: whitesmoke;
    }
    .text{
        margin-left: 60px;
        margin-right:60px;
        text-align: center;
        font-size: large;
    }
    h3{
        text-align: center;

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

        width: 25%;
        color: white;
        text-align: center;
        padding:12px;
        margin:30px auto;
        font-size: 18px;
        cursor: pointer;
        font-weight: 800;
    }


</style>
</body>
</html>
