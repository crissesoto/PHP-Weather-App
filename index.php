<?php include "scripts/forecast.php"; ?>


<?php include "templates/header.php"; ?>


<?php 
if(isset($_POST["submit"]))
{
  $cityName = htmlspecialchars($_POST["city"]);
  getCity($cityName);

};

?>


<?php include "templates/footer.php"; ?>