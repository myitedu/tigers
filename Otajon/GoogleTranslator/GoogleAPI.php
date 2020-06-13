<?php
$Languages1=$_POST["Languages1"]??'en';
$Text=$_POST["Text"]??'Tigers are best';
$Languages2=$_POST["Languages2"]??'uz';
$curl = curl_init();
$name=[];
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "source=$Languages1&q=$Text!&target=$Languages2",
    CURLOPT_HTTPHEADER => array(
        "accept-encoding: application/gzip",
        "content-type: application/x-www-form-urlencoded",
        "x-rapidapi-host: google-translate1.p.rapidapi.com",
        "x-rapidapi-key: 074c00bcdfmshc5273e5c025ce3cp1bd31bjsn590ab169acbe"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $name=json_decode($response,1);
}
echo"<pre>";
print_r($name);
echo"</pre>";
?>