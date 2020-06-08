<?php
$country1=$_GET['country1']??'USD';
$country2=$_GET['country2']??'AUD';
$Money=[];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://currency-converter5.p.rapidapi.com/currency/convert?format=json&from=$country1&to=$country2&amount=1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: currency-converter5.p.rapidapi.com",
        "x-rapidapi-key: 074c00bcdfmshc5273e5c025ce3cp1bd31bjsn590ab169acbe"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $Money= json_decode($response);
}

