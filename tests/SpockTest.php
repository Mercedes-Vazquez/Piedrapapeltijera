<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Models\Game;

class SpockTest extends TestCase
{
    public function test_return_tied_spock()
    {
        // given
        $game = new Game("spock", "spock");

        // when
        $result = $game->play();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);
    }
    public function test_return_spock_wins_scissors()
    {
        // given
        $game = new Game("spock", "scissors");

        // when
        $result = $game->play();

        // then
        $expected = "spock win";
        $this->assertEquals($expected, $result);
    }

    public function test_return_spock_wins_rock()
    {
        // given
        $game = new Game("spock", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "spock wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_spock_defeated_by_lizzard()
    {
        // given
        $game = new Game("spock", "lizzard");

        // when
        $result = $game->play();

        // then
        $expected = "lizzard win";
        $this->assertEquals($expected, $result);
    }
    public function test_return_spock_defeated_by_paper()
    {
        // given
        $game = new Game("spock", "paper");

        // when
        $result = $game->play();

        // then
        $expected = "paper wins";
        $this->assertEquals($expected, $result);
    }
}
