<?php
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayProductInfo() {
        return "Name: " . $this->name . "\n" . "Price: $" . $this->price . "\n" . "Description: " . $this->description;
    }
}

$product = new Product("Mango", 50.00, "Description ...");
echo $product->displayProductInfo();

?>