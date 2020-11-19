<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use App\Models\Game;

class GameTest extends TestCase {

    public function test_return_tied() 
    {
        // given
        $game = new Game("rock", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "tied game";
        $this->assertEquals($expected, $result);

    }

}