<?php

class Retangcle {
    protected $length;
    protected $width;

    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }

    public function calArea()
    {
        return $this->length * $this->width;
    }

    public function calPerimeter()
    {
        return ($this->length + $this->width) *2;
    }
    
}

$length = 2;
$width = 6;
$Retangcle = new Retangcle($length, $width);
echo "Area of retangcle: " . $Retangcle->calArea() . "\n";
echo "Perimeter of retangcle: " . $Retangcle->calPerimeter();
?>