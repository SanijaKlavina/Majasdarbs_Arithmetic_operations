<?php
function factorialOfN($n){
    $f = 1; // factorial value. $n is a chosen value.
    for($i=1; $i <= $n; $i++){
        $f = $f * $i;
    }
    echo 'Factorial of '. $n.' is '.$f;
}
factorialOfN(10);
echo PHP_EOL;