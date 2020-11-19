<?php

namespace App\Models;

class Game extends Rules implements iPlay
{
    public string $result;

    public function __construct(string $choice1, string $choice2)
    {
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
    }

    public function play()
    {
       $result =  $this->startGame($this->choice1, $this->choice2);
       return $result;
    }
}
