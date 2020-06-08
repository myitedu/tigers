<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currense Exchange</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<?php
include "CurrenseExchange.php";
?>
<div class="container-fluid">
    <form method="get">
        <tr>
            <td>
                <select id="country1" name="country1" class="form-control">
                    <option value="AUD">Australian Dollar</option>
                    <option value="BGN">Bulgarian Lev</option>
                    <option value="BRL">Brazilian Real</option>
                    <option value="CAD">Canadian Dollar</option>
                    <option value="CHF">Swiss Franc</option>
                    <option value="CHY">Chinese Yuan</option>
                    <option value="CZK">Czech Koruna</option>
                    <option value="DKK">Danish Krone</option>
                    <option value="EUR">Euro</option>
                    <option value="GBP">Pound Sterling</option>
                    <option value="HKD">Hong Kong Dollar</option>
                    <option value="HRK">Croatian Kuna</option>
                    <option value="HUF">Hungrain Forint</option>
                    <option value="IDR">Indonesian Rupiah</option>
                    <option value="ILS">Israeli Shakel</option>
                    <option value="INR">Indian Rupee</option>
                    <option value="ISK">Icelandic Krona</option>
                    <option value="JPY">Japanese Yen</option>
                    <option value="KRW">South Korean Won</option>
                    <option value="MXN">Mexican Peso</option>
                    <option value="MYR">Malaysian Ringgit</option>
                    <option value="NOK">Norwegian Krone</option>
                    <option value="NZD">New Zealand Dollar</option>
                    <option value="PHP">Philippine Peso</option>
                    <option value="PLN">Polish Zloty</option>
                    <option value="RON">Romanian Leu</option>
                    <option value="RUB">Rossian Ruble</option>
                    <option value="SEK">Swedish Krona</option>
                    <option value="SGD">Singapore Dollar</option>
                    <option value="THB">Tai Baht</option>
                    <option value="TRY">Turkish Lira</option>
                    <option value="USD">US Dollar</option>
                    <option value="ZAR">South African Rand</option>
                </select>
            </td>
            <td>
                <select id="country2" name="country2" class="form-control">
                    <option value="AUD">Australian Dollar</option>
                    <option value="BGN">Bulgarian Lev</option>
                    <option value="BRL">Brazilian Real</option>
                    <option value="CAD">Canadian Dollar</option>
                    <option value="CHF">Swiss Franc</option>
                    <option value="CHY">Chinese Yuan</option>
                    <option value="CZK">Czech Koruna</option>
                    <option value="DKK">Danish Krone</option>
                    <option value="EUR">Euro</option>
                    <option value="GBP">Pound Sterling</option>
                    <option value="HKD">Hong Kong Dollar</option>
                    <option value="HRK">Croatian Kuna</option>
                    <option value="HUF">Hungrain Forint</option>
                    <option value="IDR">Indonesian Rupiah</option>
                    <option value="ILS">Israeli Shakel</option>
                    <option value="INR">Indian Rupee</option>
                    <option value="ISK">Icelandic Krona</option>
                    <option value="JPY">Japanese Yen</option>
                    <option value="KRW">South Korean Won</option>
                    <option value="MXN">Mexican Peso</option>
                    <option value="MYR">Malaysian Ringgit</option>
                    <option value="NOK">Norwegian Krone</option>
                    <option value="NZD">New Zealand Dollar</option>
                    <option value="PHP">Philippine Peso</option>
                    <option value="PLN">Polish Zloty</option>
                    <option value="RON">Romanian Leu</option>
                    <option value="RUB">Rossian Ruble</option>
                    <option value="SEK">Swedish Krona</option>
                    <option value="SGD">Singapore Dollar</option>
                    <option value="THB">Tai Baht</option>
                    <option value="TRY">Turkish Lira</option>
                    <option value="USD">US Dollar</option>
                    <option value="ZAR">South African Rand</option>
                </select>
            </td>
            </div><br>
            <button type="submit" class="btn btn-success">Submit</button><br>
            </div>
        </tr>
    </form>
                <table class="table table-bordered">
                    <tr><td>Amount: </td><td><?=$Money->amount?></td></tr>
                    <tr><td>Currency Code: </td><td><?=$Money->base_currency_code?></td></tr>
                    <tr><td>First Currency Name: </td><td><?=$Money->base_currency_name?></td></tr>

                    <tr><td>Second Currency Name: </td><td><?=$Money->rates->currency_name?></td></tr>
                    <tr><td>Rate: </td><td><?=$Money->rates->rate?></td></tr>
                    <tr><td>Rate of Amount: </td><td><?=$Money->rates->rate_for_amount?></td></tr>

                    <tr><td>Status: </td><td><?=$Money->status?></td></tr>
                    <tr><td>Updated date: </td><td><?=$Money->updated_date?></td></tr>
                </table>
</div>
</body>
</html>

