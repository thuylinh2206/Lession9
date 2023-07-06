<?php
class Car {
    private $brand;
    private $color;
    private $year;

    public function __construct($brand, $color, $year) {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayCarInfo() {
        return "Brand: " . $this->brand . "\n" . "Color: " . $this->color . "\n" . "Year: " . $this->year;
    }
}

$car = new Car("Honda", "Black", 2022);
echo $car->displayCarInfo();

?>