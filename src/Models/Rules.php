<?php

namespace App\Models;


 Abstract class Rules
{
    public string $result;
    
    
    public function choiceRock($opponent)
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
    public function choicePaper($opponent)
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
    
    public function choiceScissors($opponent)
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

    
    public function startGame($choice1, $choice2)
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
    
    public function getResult()
    {
        return $this->result;
    }
    
}