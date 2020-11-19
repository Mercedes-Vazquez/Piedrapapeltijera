<?php

namespace App\Models;


 Abstract class Rules
{
    private string $result;
    
    
    private function choiceRock($opponent)
    {
        if ($opponent === 'rock')
        {
            $this->result = 'tied game';
            return;
        }
        if ($opponent === 'paper')
        {
            $this->result = 'rock loose';
            return;
        }
        if ($opponent === 'scissors')
        {
            $this->result = 'rock wins';
            return;
        }
        
    }

    private function choicePaper($opponent)
    {
        if ($opponent === 'rock')
        {
            $this->result = 'paper wins';
            return;
        }
        if ($opponent === 'paper')
        {
            $this->result = 'tied game';
            return;
        }
        if ($opponent === 'scissors')
        {
            $this->result = 'paper loose';
            return;
        }
        
    }
    
    private function choiceScissors($opponent)
    {
        if ($opponent === 'rock')
        {
            $this->result = 'scissors loose';
            return;
        }
        if ($opponent === 'paper')
        {
            $this->result = 'scissors wins';
            return;
        }
        if ($opponent === 'scissors')
        {
            $this->result = 'tied game';
            return;
        }        
    }

    
    protected function startGame($choice1, $choice2)
    {
        if ($choice1 === 'rock')
        {
            $this->choiceRock($choice2);
            return $this->getResult();
        }
        else if ($choice1 === 'paper')
        {
            $this->choicePaper($choice2);
            return $this->getResult();
        }
        else 
        {
            $this->choiceScissors($choice2);
            return $this->getResult();
        }
    }
    
    private function getResult()
    {
        return $this->result;
    }
    
}