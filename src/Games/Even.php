<?php

function getRules(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function generateQuestion(): int
{
    return random_int(1, 20);
}

function getCorrectAnswer($question): string
{
    return $question % 2 ? 'no' : 'yes';
}
