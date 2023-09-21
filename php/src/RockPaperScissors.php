<?php declare(strict_types=1);

namespace Kata;

class RockPaperScissors
{
    public function play(string $movePlayer1, string $movePlayer2): string
    {
        if ($movePlayer2 === 'paper') {
            return 'player2 wins';
        }

        if ($movePlayer1 === 'paper') {
            return 'player1 wins';
        }

        if ($movePlayer2 === 'rock') {
            return 'player2 wins';
        }

        return 'player1 wins';
    }
}
