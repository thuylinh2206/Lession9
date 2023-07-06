<?php
class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add($otherFraction) {
        $resultNumerator = ($this->numerator * $otherFraction->denominator) + ($this->denominator * $otherFraction->numerator);
        $resultDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract($otherFraction) {
        $resultNumerator = ($this->numerator * $otherFraction->denominator) - ($this->denominator * $otherFraction->numerator);
        $resultDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply($otherFraction) {
        $resultNumerator = $this->numerator * $otherFraction->numerator;
        $resultDenominator = $this->denominator * $otherFraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide($otherFraction) {
        $resultNumerator = $this->numerator * $otherFraction->denominator;
        $resultDenominator = $this->denominator * $otherFraction->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function getNumerator() {
        return $this->numerator;
    }

    public function getDenominator() {
        return $this->denominator;
    }
}

$frac1 = new Fraction(1, 2);
$frac2 = new Fraction(3, 4);

$result = $frac1->add($frac2);
echo "Addition: " . $result->getNumerator() . "/" . $result->getDenominator() . "\n";

$result = $frac1->subtract($frac2);
echo "Subtraction: " . $result->getNumerator() . "/" . $result->getDenominator() . "\n";

$result = $frac1->multiply($frac2);
echo "Multiplication: " . $result->getNumerator() . "/" . $result->getDenominator() . "\n";

$result = $frac1->divide($frac2);
echo "Division: " . $result->getNumerator() . "/" . $result->getDenominator();
?>