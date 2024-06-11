<?php

namespace BrainGames\Engine;
use function BrainGames\Cli\greetingUser;
use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame($questionGame, array $round)
{
    //greeting
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name? ');
    line("Hello, %s!", $name);
    //end greating
    line($questionGame);

    foreach ($round as $gameTask => $correctAnswer) {
        line("Question: {$gameTask}");
        $userAnswer = prompt("Your answer: ");

        if ($userAnswer == (string)$correctAnswer) {
            line("Correct!");
        } else {
            line("''$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer''.");
            line("Let's try again, {$name}!");
            exit();
        }
    }

    line("Congratulations, $name!");
}
