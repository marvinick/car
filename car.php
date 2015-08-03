<?php

class Car
{

  public $make_model;
  public $price;
  public $miles;

}

$porsche = new Car();
$porsche->make_model = "2014 Porsche 911";
$porsche->price = 114991;
$porsche->miles = 7864;

$ford = new Car();
$ford->make_model = "2011 Ford F450";
$ford->price = 55995;
$ford->miles = 14241;

$lexus = new Car();
$lexus->make_model = "2013 Lexus RX 350";
$lexus->price = 44700;
$lexus->miles = 20000;

$mercedes = new Car();
$mercedes->make_model = "Mercedes Benz CLS550";
$mercedes->price = 39900;
$mercedes->miles = 37979;

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
        echo "<p>$specific_car->make_model</p>
              <p>$specific_car->miles miles</p>
              <p>$$specific_car->price</p>
        ";

      }
    ?>
  </div>
</body>
</html>
