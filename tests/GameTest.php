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