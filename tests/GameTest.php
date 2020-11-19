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

    public function test_return_rock_wins_when_scissors_are_choice1()
    {
        // given
        $game = new Game("scissors", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "rock wins";
        $this->assertEquals($expected, $result);
    }

    public function test_return_lizzard_wins()
    {
        // given
        $game = new Game("lizzard", "paper");

        // when
        $result = $game->play();

        // then
        $expected = "lizzard wins";
        $this->assertEquals($expected, $result);
      
    }

    public function test_return_spock_wins()
    {
        // given
        $game = new Game("spock", "rock");

        // when
        $result = $game->play();

        // then
        $expected = "spock wins";
        $this->assertEquals($expected, $result);
      
    }

}