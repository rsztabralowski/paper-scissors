<?php

class Choice
{
    private $choice;
       
    public function setChoice($choice)
    {
        $this->choice = $choice;
    }
    
    public function getChoice()
    {
        switch($this->choice)
        {
            case 1 : 
                $choice = 'rock';
                break;
            case 2 : 
                $choice = 'paper';
                break;
            case 3 : 
                $choice = 'scissors';
                break;
            case 4 : 
                $choice = 'lizard';
                break;
            case 5 : 
                $choice = 'spock';
                break;
        }
  
        return $choice;
    }
    
    public function getResult($num)
    {
        $result[0] = "Scissors cut Paper";
        $result[1] = "Paper covers Rock";
        $result[2] = "Rock crushes Lizard";
        $result[3] = "Lizard poisons Spock";
        $result[4] = "Spock smashes Scissors";
        $result[5] = "Scissors decapitates Lizard";
        $result[6] = "Lizard eats Paper";
        $result[7] = "Paper disproves Spock";
        $result[8] = "Spock vaporizes Rock";
        $result[9] = "Rock crushes Scissors";
        
        return $result[$num];
    }
    
    public function compareChoices($playerChoice, $computerChoice)
    {
        $output = array();
        
        $toCompare[] = array('rock', 'scissors', 'lizard', 9 , 2);
        $toCompare[] = array('paper', 'rock', 'spock', 1 , 7);
        $toCompare[] = array('scissors', 'paper', 'lizard', 0, 5);
        $toCompare[] = array('lizard', 'paper', 'spock', 6, 3);
        $toCompare[] = array('spock', 'scissors', 'rock', 4, 8);

        
        if($playerChoice == $computerChoice)
        {
            return $output[] = 'It\'s a tie!';
        }
        
        foreach($toCompare as $value)
        {
            if($playerChoice == $value[0] && ($computerChoice == $value[1] || $computerChoice == $value[2]))
            {
                $output[] = 'You win!';

                if($computerChoice == $value[1])
                {
                    $output[] = $this->getResult($value[3]);
                }
                else
                {
                    $output[] = $this->getResult($value[4]);
                }

                return $output;
            }
            
            if($computerChoice == $value[0] && ($playerChoice == $value[1] || $playerChoice == $value[2]))
            {
                $output[] = 'You lose...';

                if($playerChoice == $value[1])
                {
                    $output[] = $this->getResult($value[3]);
                }
                else
                {
                    $output[] = $this->getResult($value[4]);
                }

                return $output;
            }
        }
    }
}
