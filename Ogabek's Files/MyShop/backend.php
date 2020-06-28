<?php
$keyword=strip_tags($_GET['keyword']??'Apple');
$product=[];
$curl = curl_init();
curl_setopt_array($curl, array(
		CURLOPT_URL => "https://amazon-product-reviews-keywords.p.rapidapi.com/product/search?country=US&keyword=$keyword",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
				"x-rapidapi-host: amazon-product-reviews-keywords.p.rapidapi.com",
				"x-rapidapi-key: 074c00bcdfmshc5273e5c025ce3cp1bd31bjsn590ab169acbe"
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
				'msg'=>"Your Products is Found",
				'output'=>$response
		];
		$arrays=json_decode($response);
}