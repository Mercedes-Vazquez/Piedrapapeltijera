<?php

namespace App\Models;

class Game 
{
    private string $result;

    public function __construct(string $choice1, string $choice2)
    {
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
    }

    public function play()
    {
      $this->startGame($this->choice1, $this->choice2);
       return $this->getResult();
    }

    private function startGame($choice1, $choice2)
    {

        if ($choice1 === $choice2){
            $this->result = 'tied game';
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