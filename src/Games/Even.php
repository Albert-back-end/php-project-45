<?php

namespace Games\EvenGame;

use const BrainGames\Engine\ROUNDS_COUNT;
use function BrainGames\Engine\runGame;

const questionGame = 'Answer "yes" if the number is even, otherwise answer "no".';

function runEvenGame()
{
    $questionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = rand(1, 50);
        $questionsAndAnswers["{$randomNumber}"] = isEven($randomNumber) ? 'yes' : 'no';
    }

    runGame(questionGame, $questionsAndAnswers);
}

function isEven($number) {
    return $number % 2 === 0 ? true : false;
}