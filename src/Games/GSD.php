<?php

namespace Games\GSDGame;

use const BrainGames\Engine\ROUNDS_COUNT;
use function BrainGames\Engine\runGame;

const questionGame = 'Find the greatest common divisor of given numbers.';

function runGSDGame()
{
    $questionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++)
    {
        $firstRandomNumber = rand(1, 50);
        $secondRandomNumber = rand(1, 50);

        $question = $firstRandomNumber . " " . $secondRandomNumber;
        $gsdAnswer = gmp_gcd($firstRandomNumber, $secondRandomNumber);
        $questionsAndAnswers[$question] = $gsdAnswer;
    }

    runGame(questionGame, $questionsAndAnswers);
}

