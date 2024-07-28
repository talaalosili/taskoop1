<?php
class car{

private $make;
private $model;
private $vin;

public function __construct($make,$model,$vin){
    $this->make=$make;
    $this->model=$model;
    $this->vin=$vin;
    echo "Car with VIN: $this->vin created.\n";

}
public function __destructor($make,$model,$vin){
    $this->make=$make;
    $this->model=$model;
    $this->vin=$vin;
    echo "Car with VIN: $this->vin destroyed.\n";
}
public function getMake() {
    return $this->make;
}

public function setMake($make) {
    $this->make = $make;
}

public function getModel() {
    return $this->model;
}

public function setModel($model) {
    $this->model = $model;
}

public function getVin() {
    return $this->vin;
}
public function getDetails() {
    return "Make: $this->make, Model: $this->model, VIN: $this->vin";
}
}
class Inventory {
    private $cars=[];

    public function addcar($car){
        $this->cars[$car->getVin()] = $car;
        echo "Car with VIN: " . $car->getVin() . " added to inventory.\n";
    }
    public function removeCar($vin) {
        if (isset($this->cars[$vin])) {
            unset($this->cars[$vin]);
            echo "Car with VIN: $vin removed from inventory.\n";
        } else {
            echo "Car with VIN: $vin not found in inventory.\n";
        }
    }

    public function listCars() {
        if (empty($this->cars)) {
            echo "No cars in inventory.\n";
        } else {
            foreach ($this->cars as $car) {
                echo $car->getDetails() . "\n";
            }
        }
    }
}    

$inventory = new Inventory();

$car1 = new car("Toyota", "Camry", "VIN12345");
$car2 = new car("Honda", "Civic", "VIN67890");
echo "<br>";
$inventory->addCar($car1);

// echo "<br>";
// $inventory->addCar($car2);
// $inventory->listCars();
$inventory->removeCar("VIN12345");
// $inventory->listCars();        
?>