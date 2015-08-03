<?php

class Car
{

  private $make_model;
  private $price;
  private $miles;
  private $picture;

  function __construct($make_model, $price, $miles, $picture) {
    $this->make_model = $make_model;
    $this->price = $price;
    $this->miles = $miles;
    $this->picture = $picture;

  }

  function getPrice() {
    return $this->price;
  }

  function getMake() {
    return $this->make_model;
  }

  function getMiles() {
    return $this->miles;
  }

  function getPicture() {
    return $this->picture;
  }

  function setPrice($new_price) {
    $float_price = (float) $new_price;
    if ($float_price !=0) {
      $formatted_price = number_format($float_price, 2);
      $this->price = $formatted_price;
    }
  }

}



$porsche = new Car("2014 Porsche 911", 114991, 7864, "img/porsche.jpg");
$ford = new Car("2011 Ford F450", 55995, 14241, "/img/ford.jpg");
$lexus = new Car("2013 Lexus RX 350", 44700, 20000, "/img/lexus.jpg");
$mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "/img/cls550.jpg");
$mercedes->setPrice("35000.125");
$porsche->setPrice("hotdog");


// $porsche = new Car();
// $porsche->make_model = "2014 Porsche 911";
// $porsche->price = 114991;
// $porsche->miles = 7864;
//
// $ford = new Car();
// $ford->make_model = "2011 Ford F450";
// $ford->price = 55995;
// $ford->miles = 14241;
//
// $lexus = new Car();
// $lexus->make_model = "2013 Lexus RX 350";
// $lexus->price = 44700;
// $lexus->miles = 20000;
//
// $mercedes = new Car();
// $mercedes->make_model = "Mercedes Benz CLS550";
// $mercedes->price = 39900;
// $mercedes->miles = 37979;


$cars = array($porsche, $ford, $lexus, $mercedes);

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="container">
    <?php
      foreach ($cars as $specific_car) {
        $car_price = $specific_car->getPrice();
        $car_make = $specific_car->getMake();
        $car_miles = $specific_car->getMiles();
        $car_picture = $specific_car->getPicture();
        echo "<div><img src='$car_picture'</div>
              <p>$car_make</p>
              <p>$car_miles miles</p>
              <p>$$car_price</p>
        ";

      }
    ?>
  </div>
</body>
</html>
