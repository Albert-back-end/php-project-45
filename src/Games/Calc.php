<?php

namespace Games\CalcGame;

use const BrainGames\Engine\ROUNDS_COUNT;
use function BrainGames\Engine\runGame;

const questionGame = 'What is the result of the expression?';

function runCalcGame()
{
    $questionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++)
    {
        $firstRandomNumber = rand(1, 15);
        $secondRandomNumber = rand(1, 15);
        $signArray = ['+', '-', '*', '/'];
        $randomSign = $signArray[array_rand($signArray)];

        $questionString = $firstRandomNumber . " " . $randomSign . " " .  $secondRandomNumber;

        $questionsAndAnswers[$questionString] = getCalculateAnswer($firstRandomNumber, $secondRandomNumber, $randomSign);
    }

    runGame(questionGame, $questionsAndAnswers);
}

function getCalculateAnswer($firstRandomNumber, $secondRandomNumber, $randomSign)
{
    switch ($randomSign)
    {
        case '+':
            return $firstRandomNumber + $secondRandomNumber;
        case '-':
            return $firstRandomNumber - $secondRandomNumber;
        case '*':
            return $firstRandomNumber * $secondRandomNumber;
        case '/':
            return $firstRandomNumber / $secondRandomNumber;
    }
}