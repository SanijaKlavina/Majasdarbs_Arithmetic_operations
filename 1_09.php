<?php
function calculateBmi($wmetric, $hmetric){
    $weight = $wmetric * 2.2;
    $height = $hmetric * 0.3937008;
    $bmi = ($weight * 703)/ $height ** 2;
    if($bmi < 18.5){
        echo 'You are underweight!';
    } else if($bmi > 25.0){
        echo 'You are overweight!';
    } else {
        echo 'Your weight is optimal.';
    }
    echo PHP_EOL;
}
calculateBmi(58, 170);
