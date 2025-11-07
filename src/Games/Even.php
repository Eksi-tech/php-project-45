<?php

function getRules()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function generateQuestion()
{
    return rand(1, 20);
}

function getCorrectAnswer($question)
{
    return $question % 2 ? 'no' : 'yes';
}
