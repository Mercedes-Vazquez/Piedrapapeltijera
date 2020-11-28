<?php
namespace App\Models;

Class Spock implements iPlay {

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
            return $this->result = 'spock wins';
        
        }
        if ($this->opponent === 'paper')
        {
            return$this->result = 'paper wins';
            
        }
        if ($this->opponent === 'scissors')
        {
            return $this->result = 'spock win';
            
        }        
        if ($this->opponent === 'lizzard')
        {
            return $this->result = 'lizzard win';
        
        }              
    }
}