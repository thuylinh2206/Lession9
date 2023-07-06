<?php
class HotelBooking {
    private $name;
    private $checkInDate;
    private $numOfNights;
    private $roomPrice;

    public function __construct($name, $checkInDate, $numOfNights, $roomPrice) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numOfNights = $numOfNights;
        $this->roomPrice = $roomPrice;
    }

    public function calculateTotalPayment() {
        return $this->numOfNights * $this->roomPrice;
    }

    public function getName() {
        return $this->name;
    }

    public function getCheckInDate() {
        return $this->checkInDate;
    }

    public function getNumOfNights() {
        return $this->numOfNights;
    }

    public function getRoomPrice() {
        return $this->roomPrice;
    }
}

$name = "Nguyen Giang";
$checkInDate = "2023-07-05";
$numOfNights = 3;
$roomPrice = 100;

$booking = new HotelBooking($name, $checkInDate, $numOfNights, $roomPrice);

echo "Customer: " . $booking->getName() . "\n";
echo "Check-in Date: " . $booking->getCheckInDate() . "\n";
echo "Number of Nights: " . $booking->getNumOfNights() . "\n";
echo "Room Price: $" . $booking->getRoomPrice() . "\n";
echo "Total Payment: $" . $booking->calculateTotalPayment();
?>