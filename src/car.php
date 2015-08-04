<?php

// $user_price = $_GET["user_price"];
// $user_miles = $_GET["user_miles"];

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

    function certainSpecs($user_price, $user_miles) {

      if (($this->price <= $user_price) && ($this->miles <= $user_miles)) {
        return true;
      }
      else {
        return false;
      }
    }

    function searchCars() {
      $counter = 0;
      $whatToReturn = "";
      foreach ($cars as $specific_car) {
        if ($specific_car->certainSpecs($user_price, $user_miles)) {
          $counter++;
          $car_price = $specific_car->getPrice();
          $car_make = $specific_car->getMake();
          $car_miles = $specific_car->getMiles();
          $car_picture = $specific_car->getPicture();
          $whatToReturn = $whatToReturn + "<div><img src='$car_picture'</div>
                <p>$car_make</p>
                <p>$car_miles miles</p>
                <p>$$car_price</p>
              ";
        }
      }
        if ($counter == 0) {
          $whatToReturn = '<p>Your search matched zero results</p>';
        }
        echo $whatToReturn;
    }


  }

?>
