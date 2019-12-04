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
        <input type="submit" value="Search" name="submit" class="btn btn-outline-light">
      </form>