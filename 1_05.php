<?php
//GUESS A NUMBER FROM 1 TO 100. If you can...:)
$number = range(1,100);

$guesses = 0;
$maxGuesses = 3;

while($guesses < $maxGuesses){
    $randomNumber = array_rand($number);
    $numberChosen = readline("I'm thinking of a number between 1-100.  Try to guess it. > ");
    if($numberChosen < $randomNumber){
        echo 'Sorry, you are too low. I was thinking of '. $randomNumber.'.';
    } else if ($numberChosen > $randomNumber){
        echo 'Sorry, you are too high. I was thinking of '. $randomNumber.'.';
    } else if ($numberChosen == $randomNumber) {
        echo 'You guessed it! What are the odds?!?';
    } else {
        echo 'Out of range!';
    }
    echo PHP_EOL;
    $guesses++;
}


