<?php
namespace App\Models;

Class Scissors implements iPlay 
{
    public string $result; 

    public function __construct (string $opponent) 

    {

        $this->opponent = $opponent;
        $this->result = $this->play ();

    }

    public function play(): string
    {
        if ($this->opponent === 'rock')
        {
            return $this->result = 'rock wins';
            
        }
        
        if ($this->opponent === 'paper')
        {
            return $this->result = 'scissors wins';
            
        }

        if ($this->opponent === 'lizzard')
        {
            return $this->result = 'scissors win';
            
        }

        if ($this->opponent === 'spock')
        {
            return $this->result = 'spock win';
            
        }        
    }
}