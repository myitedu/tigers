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
        <img class="img" src="https://www.td.com/us/en/personal-banking/images/TDB_tag_white_tcm371-253361.png" alt="tdbank logo">
    </div>
    <div class="transferform">
        <div class="transfer">
            <h3>Transfer Money</h3>
            <p>Send money from your wallet to any bamk account</p>
        </div>
        <div class="form">
            <div id="form">
                <form>
                    <p>
                        <label>Bank Name</label> <input class="bank_name" name="bank_name" placeholder="*******" required>
                    </p>
                    <p>
                        <label>Account Number</label> <input class="account_number" name="account_number" placeholder="*******" required>
                    </p>
                    <p>
                        <label>Amount</label> <input class="amount" type="number" min="0" max="10000" step="1" name="Broker_Fees" id="broker_fees" required="required">
                    </p>

                    <div class="icons">
                        <i class="fab fa-cc-mastercard" style="font-size: 3.5em"></i> |
                        <i class="fab fa-cc-visa" style="font-size: 3.5em"> </i> |
                        <i class="fab fa-cc-paypal" style="font-size: 3.5em"></i>
                    </div>
                    <div class="transfer-button">
                        <button type="submit">Transfer the money</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
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
    .img{
        width:100%;
        height:130px;

    }
    .topdiv{
        width:100%;
        height:200px;
        background-color: green;
        text-align: center;
        padding-top:40px;
        padding-bottom:30px;
    }
    .transferform{
        padding:30px;

    }
    form{
        text-align:center;
    }
    .transferform{
        background-color: whitesmoke;
    }
    .h3 p{
        margin-left: 60px;
        margin-right:60px;
        text-align: center;
        font-size: large;
    }
    h3{
        text-align: center;

    }
    p{
        text-align: center;
        padding-top:10px;
    }
    .bank_name{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
        position: relative;
        left:15px;
    }
    .account_number{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
        position: relative;
        right:3px;
    }
    .amount{
        width:190px;
        border: 1px solid #999999;
        border-radius:5px;
        padding:5px;
        position: relative;
        left:30px;
    }
    .transfer-button {

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
</html>
