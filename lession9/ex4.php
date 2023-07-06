<?php
class Clock {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function displayTime() {
        return sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
    }

    public function incrementSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->incrementMinute();
        }
    }

    private function incrementMinute() {
        $this->minute++;
        if ($this->minute >= 60) {
            $this->minute = 0;
            $this->incrementHour();
        }
    }

    private function incrementHour() {
        $this->hour++;
        if ($this->hour >= 24) {
            $this->hour = 0;
        }
    }
}

$clock = new Clock(14, 30, 30);
echo "Current time: " . $clock->displayTime() . "\n";
$clock->incrementSecond();
echo "Updated time: " . $clock->displayTime();

?>