<?php

function getRules()
{
    return 'What is the result of the expression?';
}

function generateQuestion()
{
    $firstOperand = rand(1, 20);
    $secondOperand = rand(1, 20);
    $actions = ["+", "-", "*"];
    $operation = $actions[rand(0, 2)];
    return "$firstOperand $operation $secondOperand";
}

function getCorrectAnswer($question)
{
    list($firstOperand, $operation, $secondOperand) = explode(" ", $question);
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
