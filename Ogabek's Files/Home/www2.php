<?php
$country1 = $_GET['enter_code1']??'en';
$country1 = strip_tags ($country1);
$country2 = $_GET['enter_code2']??'uz';
$country2 = strip_tags ($country2);
$country3 = $_GET['enter_code3']??'Hello';
$country3 = strip_tags ($country3);
$product = [];
$curl = curl_init();
curl_setopt_array($curl, array(
		CURLOPT_URL => "https://hirak-translate.p.rapidapi.com/tr/?to=$country2&txt=$country3&from=$country1",
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
		$product = [
				'err'=>true,
				'msg'=>$err,
				'output'=>null
		];
} else {
		$product = [
				'err'=>false,
				'msg'=>"Your word is translated",
				'output'=>$response
		];
		$product = json_decode ($response,1);
}
echo "<pre>";
var_dump($product['result']);
echo "</pre>";
?>


