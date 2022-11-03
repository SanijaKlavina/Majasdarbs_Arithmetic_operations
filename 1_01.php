<?php
function isNumFifteen($x,$y){
    if($x === 15 || $y === 15){
        echo 'True';
    } else if ($x + $y === 15 || $x - $y === 15 || $y - $x === 15){
        echo 'True';
    } else {
        echo 'false';
    }
   echo PHP_EOL;
}
isNumFifteen(25,12);