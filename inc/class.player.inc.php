<?php

class Player
{
    private $playerChoice;
    
    public function __construct($choice)
    {
        $this->playerChoice = $choice;
    }
    
    public function getPlayerChoice()
    {
        return $this->playerChoice;
    }
}
    