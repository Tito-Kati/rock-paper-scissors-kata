<?php declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissors;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase
{
    public function test_rock_should_beat_scissors(): void
    {
        $rockPaperScissors = new RockPaperScissors();

        $result = $rockPaperScissors->play('rock', 'scissors');

        self::assertSame('player1 wins', $result);
    }
}
