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

function getCorrectAnswer($question): string
{
    $elements = explode(" ", $question);
    $hiddenIndex = array_search("..", $elements);
    $intArray = array_map('intval', $elements);
    $len = count($elements);

    if ($hiddenIndex != 0 && $hiddenIndex != $len  - 1) {
        $step = ($intArray[$hiddenIndex + 1] -  $intArray[$hiddenIndex - 1]) / 2;
        $missedValue =  $intArray[$hiddenIndex - 1] + $step;
    } elseif ($hiddenIndex == 0) {
        $step = $elements[2] -  $intArray[1];
        $missedValue =  $intArray[1] - $step;
    } else {
        $step =  $intArray[2] -  $intArray[1];
        $missedValue =  $intArray[$len - 2] + $step;
    }
    return (string) $missedValue;
}
