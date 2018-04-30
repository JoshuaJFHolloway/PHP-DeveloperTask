<?php

require 'Deck.php';

class DeckTest extends PHPUnit\Framework\TestCase {

    public function testCreateSuit()
    {
        $card = new Card(arg1, arg2);
        $deck = new Deck;
        $expected = [
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
            $card,
        ];

        $this->assertEquals($expected, $deck->createSuit(arg1));
    }

}