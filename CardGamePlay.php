<?php

require 'Deck.php';

$deck = new Deck();

echo("Creating deck in perfect sequence")."\n";

foreach ($deck as $card) {
    echo $card . "\n";
}
echo "First card in the deck:"."\n";
echo $deck['0'] . "\n";

echo("Creating shuffled deck...")."\n";

$deck->checkIfAnyIndexIsSame();

echo("Created shuffled deck")."\n";

foreach ($deck as $card) {
    echo $card . "\n";
}

echo "First card in the deck:"."\n";
echo $deck['0'] . "\n";





