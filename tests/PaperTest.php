<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Models\Game;

class PaperTest extends TestCase
{

    public function test_return_tied_paper()

    {
        // given
        $game = new Game("paper", "paper");

        // when
        $result = $game->play();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);
    }
    public function test_return_paper_wins_rock()
    {
        // given
        $game = new Game("paper", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "paper wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_paper_wins_spock()
    {
        // given
        $game = new Game("paper", "spock");

        // when
        $result = $game->play();

        // then
        $expected = "paper wins";
        $this->assertEquals($expected, $result);
    }


    public function test_return_paper_defeated_by_lizzard()
    {
        // given
        $game = new Game("paper", "lizzard");

        // when
        $result = $game->play();

        // then
        $expected = "lizzard wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_paper_defeated_by_scissors()
    {
        // given
        $game = new Game("paper", "scissors");

        // when
        $result = $game->play();

        // then
        $expected = "scissors wins";
        $this->assertEquals($expected, $result);
    }
}
