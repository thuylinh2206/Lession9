<?php
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayInfo() {
        return "Name: " . $this->name . "\n" . "Age: " . $this->age . "\n" . "Address: " . $this->address;
    }
}

$person = new Person("Anh Nguyen", 20, "87 DKT");
echo $person->displayInfo();

?>