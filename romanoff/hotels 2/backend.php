<?php
$location = $_GET ["location"]??null;
function callApi($location){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/locations/search?location_id=1&limit=30&sort=relevance&offset=0&lang=en_US&currency=USD&units=km&query=$location",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: tripadvisor1.p.rapidapi.com",
            "x-rapidapi-key: e25dc719b9mshf0e2901fa6adc54p15112fjsn33d381132329"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    return $response;
}
if ($location) {
    $hotels = callApi($location);
    $hotels = json_decode($hotels, 1);
}

echo "<pre>";
foreach($hotels['data'] as $hotel){
    echo $hotel['result_object']['name'];
   echo "<img class='myimg' src='{$hotel['result_object']['photo']['images']['small']['url']}'>";
    echo "<hr>";
}
?>
<style>
    .myimg{
        width: 300px;
    }
</style>
<?php
exit;