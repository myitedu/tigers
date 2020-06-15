<?php
$Languages1 = $_GET['Languages1']??'en';
$Languages2 = $_GET['Languages2']??'uz';
$Text=$_GET['Text1']??'World';
$curl = curl_init();
$name = [];
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://hirak-translate.p.rapidapi.com/tr/?to=$Languages2&txt=$Text&from=$Languages1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: hirak-translate.p.rapidapi.com",
        "x-rapidapi-key: 2cc746c782mshf0bfaefc4546853p1d49f1jsn4e54b9b3ab33"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $name = json_decode($response,1);
}
?>



