<?php declare(strict_types=1);

namespace Kata;

class RockPaperScissors
{
    const MOVE_PAPER = 'paper';
    const MOVE_ROCK = 'rock';
    const MOVE_SCISSORS = 'scissors';
    public function play(string $movePlayer1, string $movePlayer2): string
    {
        if ($movePlayer1 === self::MOVE_SCISSORS && $movePlayer2 === self::MOVE_PAPER) {
            return 'player1 wins';
        }

        if ($movePlayer2 === self::MOVE_PAPER) {
            return 'player2 wins';
        }

        if ($movePlayer1 === self::MOVE_PAPER) {
            return 'player1 wins';
        }

        if ($movePlayer2 === self::MOVE_ROCK) {
            return 'player2 wins';
        }

        return 'player1 wins';
    }
}
