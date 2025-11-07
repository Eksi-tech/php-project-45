<?php

use function cli\line;
use function cli\prompt;

function runGame($gameName)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    require_once __DIR__ . "/Games/$gameName.php";

    $rules = getRules();
    line($rules);

    $winCount = 0;
    while ($winCount < 3) {
        $question = generateQuestion();
        line("Question: $question");
        $userAnswer = prompt('Your answer');
        $correctAnswer = getCorrectAnswer($question);

        if ($userAnswer == $correctAnswer) {
            line('Correct!');
            $winCount++;
        } else {
            line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'");
            line("Let's try again, $name!");
            return;
        }
    }

    line("Congratulations, $name!");
}
