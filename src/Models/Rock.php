<?php
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
        if ($opponent === 'paper')
        {
            return $this->result = 'paper wins'; 
        }
        if ($opponent === 'scissors')
        {
            return $this->result = 'rock wins';
        }
        if ($opponent === 'lizzard')
        {
            return $this->result = 'rock wins';
        }
        if ($opponent === 'spock')
        {
            return $this->result = 'spock wins';
        }
        
    }
}