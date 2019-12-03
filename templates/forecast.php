const key = "L6gtFl47bvHJUf6TJHb6jWgAwQ3z7MBK";

const getCurrentWeather = async cityKey => {
  const baseURL = "http://dataservice.accuweather.com/currentconditions/v1/";
  const query = `${cityKey}?apikey=${key}`;

  const response = await fetch(baseURL + query);
  const data = await response.json();

  return data[0];
};

const getCity = async cityname => {
  const baseURL =
    "http://dataservice.accuweather.com/locations/v1/cities/search";
  const query = `?apikey=${key}&q=${cityname}`;

  const response = await fetch(baseURL + query);
  const data = await response.json();

  return data[0];
};

// php 

<?php 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://jsonplaceholder.typicode.com/todos",
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

ChromePhp::log($response);

?>
