<?php

class Computer
{
    private $computerChoice;
    
    public function __construct()
    {
        $this->computerChoice = mt_rand(1,5);
    }
    
    public function getComputerChoice()
    {
        return $this->computerChoice;
    }
}
   
