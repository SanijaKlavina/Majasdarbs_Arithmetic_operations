<?php

function sumNumbers($min, $max){
    $sumValues = 0;
    for($i = $min; $i <= $max; $i++) {
        $sumValues+=$i;
    }
    echo 'The sum of '. $min .' to '. $max. ' is '. $sumValues;
}
function averageNumber($min,$max){
    $averageValues = ($min + $max)/2;
    echo 'The average is '. $averageValues;
}

sumNumbers(1,100);
echo PHP_EOL;
averageNumber(1,100);
echo PHP_EOL;