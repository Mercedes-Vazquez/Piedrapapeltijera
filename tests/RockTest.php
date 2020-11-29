<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Models\Game;

class RockTest extends TestCase
{

    public function test_return_tied_rock()
    {
        // given
        $game = new Game("rock", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);
    }

    public function test_return_rock_wins_scissors()
    {
        // given
        $game = new Game("rock", "scissors");

        // when
        $result = $game->play();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);
    }
    public function test_return_rock_defeated_by_paper()
    {
        // given
        $game = new Game("rock", "paper");

        // when
        $result = $game->play();

        // then
        $expected = "paper wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_rock_defeated_by_spock()
    {
        // given
        $game = new Game("rock", "spock");

        // when
        $result = $game->play();

        // then
        $expected = "spock wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_rock_wins_lizzard()
    {
        // given
        $game = new Game("rock", "lizzard");

        // when
        $result = $game->play();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);
    }

}