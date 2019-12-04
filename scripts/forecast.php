
<?php include "ChromePhp.php" ?>

<?php 

// create template 


function createTemplate($cityDetails, $weather){
  ChromePhp::log($cityDetails, $weather);

  // update details div template
    //echo "<img src='if({$weather["IsDayTime"]}){echo ../img/day.svg }' alt='Current wheater icon' />";

    echo   
    
    "<div class='card shadow-lg rounded '>

    <div class=' bg-light mx-auto text-center'>
    </div>
    <div class='text-muted text-uppercase text-center details'>
      <h5 class='my-3'>{$cityDetails["EnglishName"]}</h5>
      <div class='my-3'>{$weather["WeatherText"]}</div>
      <div class='display-4 my-4'>
        <span>{$weather["Temperature"]["Metric"]["Value"]}</span>
        <span>&deg;C</span>
      </div>
    </div>
  </div>
  </div>" ;
};

// Get city key for current weather

function getCurrentWeather($cityDetails){
  $key = "nrOGV86jnhxLczGGEhNruxAGVr6rcdGA";
  $cityKey = $cityDetails["Key"];
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
$weather = $response[0];

createTemplate($cityDetails, $weather);

//return $data;
ChromePhp::log($weather);

}


// Get city name for weather info

function getCity($cityname){
  $key = "nrOGV86jnhxLczGGEhNruxAGVr6rcdGA";
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
$cityDetails = $response[0];



//ChromePhp::log($cityKey);
getCurrentWeather($cityDetails);

return $cityDetails;
};


?>
