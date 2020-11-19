<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use App\Models\Game;

class GameTest extends TestCase {

    
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

    public function test_return_rock_win() 
    {
        // given
        $game = new Game("rock", "scissors");

        // when
        $result = $game->play();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);

    }

}