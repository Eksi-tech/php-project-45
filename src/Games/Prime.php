<?php

function getRules(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function generateQuestion(): int
{
    return random_int(1, 101);
}

function getCorrectAnswer($question): string
{
    $number = (int)$question;
    if ($number < 2) {
        return 'no';
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }

    return 'yes';
}
