<?php declare(strict_types=1);

namespace Kata;

class RockPaperScissors
{
    public const MOVE_PAPER = 'paper';
    public const MOVE_ROCK = 'rock';
    public const MOVE_SCISSORS = 'scissors';

    public const VICTORY_CONDITIONS = [
        [self::MOVE_ROCK, self::MOVE_SCISSORS],
        [self::MOVE_SCISSORS, self::MOVE_PAPER],
        [self::MOVE_PAPER, self::MOVE_ROCK],
    ];

    /**
     * @param self::MOVE_* $movePlayer1
     * @param self::MOVE_* $movePlayer2
     * @return string
     */
    public function play(string $movePlayer1, string $movePlayer2): string
    {
        if (in_array([$movePlayer1, $movePlayer2], self::VICTORY_CONDITIONS, true)) {
            return 'player1 wins';
        }

        return 'player2 wins';
    }
}
