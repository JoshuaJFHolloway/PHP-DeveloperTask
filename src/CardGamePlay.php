<?php

require 'Deck.php';
require 'Player.php';

$deck = new Deck();
$player1 = new Player("John");
$player2 = new Player("Mary");
$player3 = new Player("Tim");
$player4 = new Player("Lucy");

echo("\n");

echo("Creating deck in perfect sequence")."\n";

echo("\n");

foreach ($deck as $card) {
    echo $card . "\n";
}

echo("\n");

echo "First card in the deck:"."\n";
echo $deck['0'] . "\n";

echo("\n");

echo "Last card in the deck:"."\n";
echo $deck['51'] . "\n";

echo("\n");

echo("Creating shuffled deck...")."\n";


$deck->checkIfAnyIndexIsSame();

echo("\n");

echo("Created shuffled deck")."\n";

echo("\n");

foreach ($deck as $card) {
    echo $card . "\n";
}

echo("\n");

echo "First card in the shuffled deck:"."\n";
echo $deck['0'] . "\n";
echo("\n");

echo "The hands of 4 players before cards dealt to them"."\n";
echo("\n");
echo $player1;
echo("\n");
echo $player2;
echo("\n");
echo $player3;
echo("\n");
echo $player4;
echo("\n");


echo("\n");