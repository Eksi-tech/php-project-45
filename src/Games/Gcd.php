<?php

function getRules()
{
    return 'Find the greatest common divisor of given numbers.';
}

function generateQuestion()
{
    if (rand(1, 3) === 1) {
        // 33% случаев - гарантированный нетривиальный НОД
        $base = rand(2, 25);
        $firstNumber = $base * rand(2, 10);
        $secondNumber = $base * rand(2, 10);
    } else {
        // 67% случаев - полностью случайные
        $firstNumber = rand(1, 100);
        $secondNumber = rand(1, 100);
    }
    return "$firstNumber $secondNumber";
}

function getCorrectAnswer($question)
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
