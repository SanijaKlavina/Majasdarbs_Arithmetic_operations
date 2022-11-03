<?php
// Check odd or even
$number = 17;

switch($number){
    case $number % 2 === 0:
        echo 'Even';
        break;
    default:
        echo 'Odd';
        echo PHP_EOL;
}
echo 'Bye!';
echo PHP_EOL;