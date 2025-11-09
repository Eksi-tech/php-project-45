<?php

function getRules(): string
{
    return 'What is the result of the expression?';
}

function generateQuestion(): string
{
    $firstOperand = random_int(1, 20);
    $secondOperand = random_int(1, 20);
    $actions = ["+", "-", "*"];
    $operation = $actions[random_int(0, 2)];
    return "$firstOperand $operation $secondOperand";
}

function getCorrectAnswer(string $question): int
{
    list($firstOperand, $operation, $secondOperand) = explode(" ", $question);
    $firstOperand = (int)$firstOperand;
    $secondOperand = (int)$secondOperand;
    switch ($operation) {
        case "+":
            return $firstOperand + $secondOperand;
        case "-":
            return $firstOperand - $secondOperand;
        case "*":
            return $firstOperand * $secondOperand;
    }
    return 0;
}
