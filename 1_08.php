<?php

class Work {
    //public $basePay;
    //public $hours;
    public function payForHoursWorked($basePay, $hours){
        if($basePay < 8.00 || $hours > 60){
            echo 'Error';
        } else {
            echo $basePay * $hours;
        }
    }
}

$foo = new Work();

//var_dump($foo);
//echo $foo -> basePay = 7;
//echo $foo -> hours;
echo $foo -> payForHoursWorked(10.00, 45);