<?php

function getRules(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function generateQuestion(): string
{
    if (rand(1, 3) === 1) {
        $base = random_int(2, 25);
        $firstNumber = $base * random_int(2, 10);
        $secondNumber = $base * random_int(2, 10);
    } else {
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);
    }
    return "$firstNumber $secondNumber";
}

function getCorrectAnswer($question): int
{
    list($secondNumber, $firstNumber ) = explode(" ", $question);

    $firstNumber = (int)$firstNumber;
    $secondNumber = (int)$secondNumber;

    if ($secondNumber == 0) {
        return $firstNumber;
    }

    while ($secondNumber != 0) {
        $temp = $secondNumber;
        $secondNumber = $firstNumber % $secondNumber;
        $firstNumber = $temp;
    }
    return $firstNumber;
}
