
<?php include "ChromePhp.php" ?>

<?php 


// Get city key for current weather

function getCurrentWeather($cityKey){
  $key = "L6gtFl47bvHJUf6TJHb6jWgAwQ3z7MBK";
  $baseURL = "http://dataservice.accuweather.com/currentconditions/v1/$cityKey?apikey=$key";
  #$query = "$cityKey?apikey=$key";

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $baseURL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
    ),
  ));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true); //because of true, it's in an array
$data = $response[0];

return $data;
ChromePhp::log($data);

}


// Get city name for weather info

function getCity($cityname){
  $key = "L6gtFl47bvHJUf6TJHb6jWgAwQ3z7MBK";
  //$cityname = "london";
  $baseURL = "http://dataservice.accuweather.com/locations/v1/cities/search?apikey=$key&q=$cityname";
  #$query = "?apikey=$key&q=$cityName;

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $baseURL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
    ),
  ));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true); //because of true, it's in an array
$data = $response[0];

return $data;
ChromePhp::log($data);

};

#getCity("london");
#getCurrentWeather("328328");
?>
