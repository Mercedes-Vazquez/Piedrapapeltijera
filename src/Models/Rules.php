<?php

namespace App\Models;
use App\Models\Rock;


 Abstract class Rules
{
    private string $result;


 

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
            $rock = new Rock($choice2);
            $this->result = $rock->result;
            return $this->getResult();
        }

       if ($choice1 === 'paper')
        {
            $paper= new Paper($choice2);
            $this->result = $paper->result;
            return $this->getResult();
        }

        if ($choice1 === 'scissors'){

            $scissors= new Scissors($choice2);
            $this->result = $scissors->result;
            return $this->getResult();
        }

        if ($choice1 === 'lizzard'){
           
            $lizzard = new Lizzard($choice2);
            $this->result = $lizzard->result;
            return $this->getResult();
        }

        if ($choice1 === 'spock'){
            
            $spock = new Spock ($choice2);
            $this->result = $spock->result;
            return $this->getResult();
        }
    
    }
    
    private function getResult()
    {
        return $this->result;
    }
    
}