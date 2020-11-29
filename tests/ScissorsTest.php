<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Models\Game;

class ScissorsTest extends TestCase
{

    public function test_return_tied_scissors()
    {
        // given
        $game = new Game("scissors", "scissors");

        // when
        $result = $game->play();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);
    }
    public function test_return_scissors_win_paper()
    {
        // given
        $game = new Game("scissors", "paper");

        // when
        $result = $game->play();

        // then
        $expected = "scissors wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_scissors_win_lizzard()
    {
        // given
        $game = new Game("scissors", "lizzard");

        // when
        $result = $game->play();

        // then
        $expected = "scissors win";
        $this->assertEquals($expected, $result);
    }

    public function test_return_scissors_defeated_by_spock()
    {
        // given
        $game = new Game("scissors", "spock");

        // when
        $result = $game->play();

        // then
        $expected = "spock win";
        $this->assertEquals($expected, $result);
    }
    public function test_return_scissors_defeated_by_rock()
    {
        // given
        $game = new Game("scissors", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);
    }
}