<?php
declare(strict_types=1);

namespace KataTests;

use Kata\ResultRockPaperScissors;
use Kata\RockPaperScissors;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase
{
    /** @dataProvider  game_provider */
    public function test_game(string $movePlayer1, string $movePlayer2, ResultRockPaperScissors $expectedResult): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play($movePlayer1, $movePlayer2);

        self::assertSame($expectedResult, $result);
    }

    public function game_provider(): array
    {
        return [
            'test_player1_rock_should_beat_player2_scissors' => [
                RockPaperScissors::MOVE_ROCK,
                RockPaperScissors::MOVE_SCISSORS,
                ResultRockPaperScissors::PLAYER_1_WINS
            ],
            'test_player2_rock_should_beat_player1_scissors' => [
                RockPaperScissors::MOVE_SCISSORS,
                RockPaperScissors::MOVE_ROCK,
                ResultRockPaperScissors::PLAYER_2_WINS
            ],
            'test_player1_paper_should_beat_player2_rock' => [
                RockPaperScissors::MOVE_PAPER,
                RockPaperScissors::MOVE_ROCK,
                ResultRockPaperScissors::PLAYER_1_WINS
            ],
            'test_player2_paper_should_beat_player1_rock' => [
                RockPaperScissors::MOVE_ROCK,
                RockPaperScissors::MOVE_PAPER,
                ResultRockPaperScissors::PLAYER_2_WINS
            ],
            'test_player1_scissor_should_beat_player2_paper' => [
                RockPaperScissors::MOVE_SCISSORS,
                RockPaperScissors::MOVE_PAPER,
                ResultRockPaperScissors::PLAYER_1_WINS
            ],
            'test_player2_scissor_should_beat_player1_paper' => [
                RockPaperScissors::MOVE_PAPER,
                RockPaperScissors::MOVE_SCISSORS,
                ResultRockPaperScissors::PLAYER_2_WINS
            ],
            'test_player1_rock_should_draw_player2_rock' => [
                RockPaperScissors::MOVE_ROCK,
                RockPaperScissors::MOVE_ROCK,
                ResultRockPaperScissors::DRAW
            ],
            'test_player1_scissors_should_draw_player2_scissors' => [
                RockPaperScissors::MOVE_SCISSORS,
                RockPaperScissors::MOVE_SCISSORS,
                ResultRockPaperScissors::DRAW
            ],
            'test_player1_paper_should_draw_player2_paper' => [
                RockPaperScissors::MOVE_PAPER,
                RockPaperScissors::MOVE_PAPER,
                ResultRockPaperScissors::DRAW
            ],
        ];
    }
}
