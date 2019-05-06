<?php
if(isset($_POST['playerChoice']))
{
    $output = array();
    
    spl_autoload_register(function ($class_name)
    {
        $class_name = strtolower($class_name);
        include_once 'inc/class.'. $class_name .'.inc.php';
    });

    $computer = new Computer;

    $computerChoice = new Choice;

    $computerChoice->setChoice($computer->getComputerChoice());

    $output['computerChoice'] = $computer->getComputerChoice();

    $player = new Player($_POST['playerChoice']);

    $playerChoice = new Choice;

    $playerChoice->setChoice($player->getPlayerChoice());
	
	$compareChoice = new Choice;
    
    $output['result'] = $compareChoice->compareChoices($playerChoice->getChoice(), $computerChoice->getChoice());

    echo json_encode($output);
}