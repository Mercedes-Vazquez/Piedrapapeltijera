<?php

namespace App\Models;

class Game 
{
    public string $result;

    public function __construct(string $choice1, string $choice2)
    {
        $this->choice1 = $choice1;
        $this->choice2 = $choice2;
    }

    public function play()
    {
        if($this->choice1 == $this->choice2)
        {
            $result = "tied game";

            return $result;
        }

        

        else if ($this->choice1 === "rock" && $this->choice2 === "scissors")
        {

            $result = "rock wins";

            return $result;
        }
    }
}
