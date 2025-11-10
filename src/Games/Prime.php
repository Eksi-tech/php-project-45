<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runEngine;

const RULES = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runGame(): void
{
    $generateData = function () {
        $number = random_int(1, 100);
        $isPrime = isPrime($number);

        return [
            'question' => (string)$number,
            'answer' => $isPrime ? 'yes' : 'no'
        ];
    };

    runEngine($generateData, RULES);
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
