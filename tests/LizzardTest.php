<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Models\Game;

class LizzardTest extends TestCase
{
    public function test_return_tied_lizzard()
    {
        // given
        $game = new Game("lizzard", "lizzard");

        // when
        $result = $game->play();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);
    }
    public function test_return_lizzard_wins_paper()
    {
        // given
        $game = new Game("lizzard", "paper");

        // when
        $result = $game->play();

        // then
        $expected = "lizzard wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_lizzard_wins_spock()
    {
        // given
        $game = new Game("lizzard", "spock");

        // when
        $result = $game->play();

        // then
        $expected = "lizzard wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_lizzard_defeated_by_rock()
    {
        // given
        $game = new Game("lizzard", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_lizzard_defeated_by_scissors()
    {
        // given
        $game = new Game("lizzard", "scissors");

        // when
        $result = $game->play();

        // then
        $expected = "scissors wins";
        $this->assertEquals($expected, $result);
    }
}
