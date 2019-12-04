<?php include "scripts/forecast.php"; ?>


<?php 
// form submit func

function display()
{
  echo   
  
  "<div class='card shadow-lg rounded d-none'>
  <img
    src='https://via.placeholder.com'
    class='daytime card-img-top img-fluid'
    height='300px'
  />
  <div class='icon bg-light mx-auto text-center'>
    <img src='' alt='Current wheater icon' />
  </div>
  <div class='text-muted text-uppercase text-center details'>
    <h5 class='my-3'>City name</h5>
    <div class='my-3'>Weather condition</div>
    <div class='display-4 my-4'>
      <span>temp</span>
      <span>&deg;C</span>
    </div>
  </div>
</div>
</div>" ;

};

if(isset($_POST['submit']))
{
   display();
};
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />

    <title>Wheater App</title>
  </head>
  <body>
    <div class="container my-5 mx-auto">
      <h1 class="text-white text-center my-4">Weather</h1>

      <form method="post" action="index.php" class="change-location my-4 text-center text-muted">
        <label for="city" class="text-dark"
          >Enter a location for weather information</label
        >
        <input type="text" name="city" class="form-control p-4" />
        <input type="submit" value="Search" name="submit">
      </form>


    <footer class="text-center text-muted">
      Made with &#10084; by Crisse &copy; Copyright 2019
    </footer>

    
  </body>
</html>