<?php
namespace App\Models;

Class Lizzard implements iPlay 
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
            return $this->result = 'lizzard wins';
            
        }
        if ($this->opponent === 'scissors')
        {
            return $this->result = 'scissors win';
            
        }        
        if ($this->opponent === 'spock')
        {
            return $this->result = 'lizzard win';
            
        }        
        
    }
}