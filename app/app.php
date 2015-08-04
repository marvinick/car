<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/car.php";

  $app = new Silex\Application();

  $app->get("/", function() {
    return "
    <!DOCTYPE html>
    <html>
    <head>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
      <title>Search for a car!</title>
    </head>

    <body>
      <div class='container'>
        <h1>Car Search</h1>
        <p>Enter the price and mileage in a car that you are looking for.</p>
        <form action='/search_results'>
          <div class='form-group'>
            <label for='user_price'>Enter a price:</label>
            <input id='user_price' name='user_price' class='form-control' type='number'>
          </div>
          <div class='form-group'>
            <label for='user_miles'>Enter a mileage:</label>
            <input id='user_miles' name='user_miles' class='form-control' type='number'>
          </div>
          <button type='submit' class='btn-success'>Search</button>
        </form>
    </body>
    </html>
    ";
    });

    $app->get("/search_results", function() {

      $porsche = new Car("2014 Porsche 911", 114991, 7864, "img/porsche.jpg");
      $ford = new Car("2011 Ford F450", 55995, 14241, "/img/ford.jpg");
      $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "/img/lexus.jpg");
      $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "/img/cls550.jpg");
      $mercedes->setPrice("35000.125");
      $porsche->setPrice("hotdog");

      $user_price = $_GET["user_price"];
      $user_miles = $_GET["user_miles"];
      $cars = array($porsche, $ford, $lexus, $mercedes);

      return "
        <!DOCTYPE html>
        <html>
        <head>
        </head>
        <body>
          <div class='container'>
            <?php
              searchCars();
            ?>
          </div>
        </body>
        </html>
      ";
    });

    return $app;
?>
