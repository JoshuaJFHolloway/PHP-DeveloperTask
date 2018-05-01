<?php

require 'Deck.php';

$deck = new Deck();

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