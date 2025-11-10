<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runEngine;

const RULES = 'Find the greatest common divisor of given numbers.';

function runGame(): void
{
    $generateData = function () {
        if (random_int(1, 3) === 1) {
            $base = random_int(2, 25);
            $a = $base * random_int(2, 10);
            $b = $base * random_int(2, 10);
        } else {
            $a = random_int(1, 100);
            $b = random_int(1, 100);
        }

        $question = "$a $b";
        $answer = getGcd($a, $b);

        return [
            'question' => $question,
            'answer' => (string)$answer
        ];
    };

    runEngine($generateData, RULES);
}

function getGcd(int $a, int $b): int
{
    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }
    return $a;
}
