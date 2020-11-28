<?php
namespace App\Models;
Class Rock implements iPlay 
{
    public string $result; 

    public function __construct (string $opponent) 

    {

        $this->opponent = $opponent;
        $this->result = $this->play ();

    }

    public function play(): string
    {
        if ($this->opponent === 'paper')
        {
            return $this->result = 'paper wins'; 
        }
        if ($this->opponent === 'scissors')
        {
            return $this->result = 'rock wins';
        }
        if ($this->opponent === 'lizzard')
        {
            return $this->result = 'rock wins';
        }
        if ($this->opponent === 'spock')
        {
            return $this->result = 'spock wins';
        }
        
    }
}