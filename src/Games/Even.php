<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runEngine;

const RULES = 'Answer "yes" if the number is even, otherwise answer "no".';

function runGame(): void
{
    $generateData = function () {
        $number = random_int(1, 100);
        $isEven = $number % 2 === 0;

        return [
            'question' => (string)$number,
            'answer' => $isEven ? 'yes' : 'no'
        ];
    };

    runEngine($generateData, RULES);
}
