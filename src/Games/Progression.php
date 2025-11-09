<?php

function getRules(): string
{
    return 'What number is missing in the progression?';
}

function generateProgression(): string
{
    $firstRandInt = random_int(1, 20);
    $numberOfSteps = random_int(1, 5);
    $progressionLen = random_int(5, 10);
    $randomMissNum = random_int(0, $progressionLen - 1);

    $progression = [];

    for ($i = 0; $i < $progressionLen; $i++) {
        $progression[] = $firstRandInt + $i * $numberOfSteps;
    }

    $progression[$randomMissNum] = "..";
    return implode(' ', $progression);
}

function generateQuestion(): string
{
    return generateProgression();
}

function getCorrectAnswer(string $question): string
{
    $elements = explode(" ", $question);
    $hiddenIndex = (int)array_search("..", $elements, true);
    $len = count($elements);

    if ($hiddenIndex !== 0 && $hiddenIndex !== $len  - 1) {
        $step = ((int)$elements[$hiddenIndex + 1] -  (int)$elements[$hiddenIndex - 1]) / 2;
        $missedValue =  (int)$elements[$hiddenIndex - 1] + $step;
    } elseif ($hiddenIndex === 0) {
        $step = (int)$elements[2] -  (int)$elements[1];
        $missedValue =  (int)$elements[1] - $step;
    } else {
        $step =  (int)$elements[2] -  (int)$elements[1];
        $missedValue =  (int)$elements[$len - 2] + $step;
    }
    return (string) $missedValue;
}
