<?php

$movies = $_GET['keyword'] ?? 'Titanic';
$Titanic = [];
$curl = curl_init ();
curl_setopt_array ($curl, array (
		CURLOPT_URL => "https://imdb-internet-movie-database-unofficial.p.rapidapi.com/film/$movies",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array (
				"x-rapidapi-host: imdb-internet-movie-database-unofficial.p.rapidapi.com",
				"x-rapidapi-key: 074c00bcdfmshc5273e5c025ce3cp1bd31bjsn590ab169acbe"
		),
));
$response = curl_exec ($curl);
$err = curl_error ($curl);
curl_close ($curl);
if ($err) {
		echo "cURL Error #:" . $err;
} else {
		$Titanic = json_decode ($response);
}

?>