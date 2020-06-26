<?php
$location = $_GET['location']??null;
function searchApi($location){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/locations/search?location_id=1&limit=30&sort=relevance&offset=0&lang=en_US&currency=USD&units=mi&query=$location",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: tripadvisor1.p.rapidapi.com",
            "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return [
            'error' => true,
            'output' => $err
        ];
    } else {
        return [
            'error' => false,
            'output' => $response
        ];
    }
}
$results = searchApi($location);
echo"<pre>";
print_r($results);