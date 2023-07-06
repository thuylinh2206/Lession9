<?php
class IntegerArray {
    private $number;

    public function __construct($number){
        $this->number = $number;
    }

    public function calculateSum(){
        return array_sum($this->number);
    }

    public function calculateAverage(){
        $count = count($this->number);
        if($count === 0){
            return 0;
        }
        return $this->calculateSum() / $count;
    }

    public function findMaximum(){
        return max($this->number);
    }
}

$array = [2,4,6,8];
$integerArray = new IntegerArray($array);

echo "Sum = " . $integerArray->calculateSum() . "\n";
echo "Average = " . $integerArray->calculateAverage() . "\n";
echo "Maximum = " . $integerArray->findMaximum();
?>