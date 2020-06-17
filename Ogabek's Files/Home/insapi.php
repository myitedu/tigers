<?php
$username = $_POST;
$username ['user_name']??'a.ogabek.03';
$username = strip_tags($username);
$post = [];

$curl = curl_init ();
curl_setopt_array ($curl, array (
		CURLOPT_URL => "https://easy-instagram-service.p.rapidapi.com/username?random=x8n3nsj2&username=a.ogabek.03",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array (
				"x-rapidapi-host: easy-instagram-service.p.rapidapi.com",
				"x-rapidapi-key: 2cc746c782mshf0bfaefc4546853p1d49f1jsn4e54b9b3ab33"
		),
));

$response = curl_exec ($curl);
$err = curl_error ($curl);

curl_close ($curl);

if ($err) {
		echo "cURL Error #:" . $err;
		$post = [
				'err'=>true,
				'msg'=>$err,
				'output'=>null
		];
} else {
		$post = [
				'err'=>false,
				'msg'=>"Your Account is Found Successfully",
				'output'=>$response
		];
		$post = json_decode ($response);
}

echo "<pre>";
print_r ($post);
echo "</pre>";
?>