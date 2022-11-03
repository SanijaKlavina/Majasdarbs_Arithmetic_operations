<?php

function objectFallen($a, $t, $v, $xi){
    $xt = 0.5 * ($a * $t**2) + ($v * $t) + $xi;
    echo 'The current position of an object is '. $xt. 'm.';
    echo PHP_EOL;
}
objectFallen(-9.81, 10, 0, 0);