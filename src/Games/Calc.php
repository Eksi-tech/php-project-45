<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runEngine;

const RULES = 'What is the result of the expression?';

function runGame(): void
{
    $generateData = function () {
        $a = random_int(1, 50);
        $b = random_int(1, 50);
        $operations = ['+', '-', '*'];
        $op = $operations[array_rand($operations)];

        $question = "$a $op $b";
        $answer = calculate($a, $b, $op);

        return [
            'question' => $question,
            'answer' => (string)$answer
        ];
    };

    runEngine($generateData, RULES);
}

function calculate(int $a, int $b, string $operation): int
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \InvalidArgumentException("Unknown operation: $operation");
    }
}
