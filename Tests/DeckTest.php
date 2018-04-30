<?php

require 'Deck.php';

class DeckTest extends PHPUnit\Framework\TestCase {

    public function testCreateSuit()
    {
        $card = new Card(arg1, arg2);
        $deck = new Deck;
        $expected  = array_fill(0, 13, $card);

        $this->assertEquals($expected, $deck->createSuit(arg1));
    }

    public function testCreateDeck()
    {
        $card = new Card(arg1, arg2);
        $deck = new Deck;

        $expected  = array_fill(0, 52, $card);

        $this->assertEquals($expected, $deck->createDeck());

    }

}