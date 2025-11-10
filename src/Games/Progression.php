<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runEngine;

const RULES = 'What number is missing in the progression?';

function runGame(): void
{
    $generateData = function () {
        $start = random_int(1, 20);
        $step = random_int(1, 5);
        $length = random_int(5, 10);
        $hiddenIndex = random_int(0, $length - 1);

        $progression = [];
        $correctAnswer = 0;

        for ($i = 0; $i < $length; $i++) {
            $value = $start + $i * $step;
            if ($i === $hiddenIndex) {
                $progression[] = '..';
                $correctAnswer = $value;
            } else {
                $progression[] = $value;
            }
        }

        return [
            'question' => implode(' ', $progression),
            'answer' => (string)$correctAnswer
        ];
    };

    runEngine($generateData, RULES);
}
