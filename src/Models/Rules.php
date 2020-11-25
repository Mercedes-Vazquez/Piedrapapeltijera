<?php

namespace App\Models;


 Abstract class Rules
{
    private string $result;
    
    
    // private function choiceRock($opponent)
    // {
        
    //     if ($opponent === 'paper')
    //     {
    //         $this->result = 'paper wins';
    //         return;
    //     }
    //     if ($opponent === 'scissors')
    //     {
    //         $this->result = 'rock wins';
    //         return;
    //     }
    //     if ($opponent === 'lizzard')
    //     {
    //         $this->result = 'rock wins';
    //         return;
    //     }
    //     if ($opponent === 'spock')
    //     {
    //         $this->result = 'spock wins';
    //         return;
    //     }
        
    // }

    // private function choicePaper($opponent)
    // {
    //     if ($opponent === 'rock')
    //     {
    //         $this->result = 'paper wins';
    //         return;
    //     }
    
    //     if ($opponent === 'scissors')
    //     {
    //         $this->result = 'scissors wins';
    //         return;
    //     }

    //     if ($opponent === 'lizzard')
    //     {
    //         $this->result = 'lizzard wins';
    //         return;
    //     }

    //     if ($opponent === 'spock')
    //     {
    //         $this->result = 'paper wins';
    //         return;
    //     }
        
    // }
    
    private function choiceScissors($opponent)
    {
        if ($opponent === 'rock')
        {
            $this->result = 'rock wins';
            return;
        }
        if ($opponent === 'paper')
        {
            $this->result = 'scissors wins';
            return;
        }

        if ($opponent === 'lizzard')
        {
            $this->result = 'scissors win';
            return;
        }

        if ($opponent === 'spock')
        {
            $this->result = 'spock win';
            return;
        }        
    }

    private function choiceLizzard($opponent)
    {
        if ($opponent === 'rock')
        {
            $this->result = 'rock wins';
            return;
        }
        if ($opponent === 'paper')
        {
            $this->result = 'lizzard wins';
            return;
        }
        if ($opponent === 'scissors')
        {
            $this->result = 'scissors win';
            return;
        }        
        if ($opponent === 'spock')
        {
            $this->result = 'lizzard win';
            return;
        }        
    }

    private function choiceSpock($opponent)
    {
        if ($opponent === 'rock')
        {
            $this->result = 'spock wins';
            return;
        }
        if ($opponent === 'paper')
        {
            $this->result = 'paper wins';
            return;
        }
        if ($opponent === 'scissors')
        {
            $this->result = 'spock win';
            return;
        }        
        if ($opponent === 'lizzard')
        {
            $this->result = 'lizzard win';
            return;
        }              
    }

    private function tiedGame()
    {
        $this->result = 'tied game';
        return;
    }

    
    protected function startGame($choice1, $choice2)
    {

        if ($choice1 === $choice2){
            $this->tiedGame();
            return $this->getResult();
        }
        
        if ($choice1 === 'rock')
        {
            $this->result = new Rock($choice2);
            return $this->getResult();
        }

       if ($choice1 === 'paper')
        {
            $this->result = new Paper($choice2);
            return $this->getResult();
        }

        if ($choice1 === 'scissors'){
            $this->choiceScissors($choice2);
            return $this->getResult();
        }

        if ($choice1 === 'lizzard'){
            $this->choiceLizzard($choice2);
            return $this->getResult();
        }

        if ($choice1 === 'spock'){
            $this->choiceSpock($choice2);
            return $this->getResult();
        }
    
    }
    
    private function getResult()
    {
        return $this->result;
    }
    
}