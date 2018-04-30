<?php

require 'Card.php';

class CardTest extends PHPUnit\Framework\TestCase {

    public function testGetSuit()
    {
        $card = new Card(suit, value);
        $expected = [
            1 => "Diamond",
            2 => "Club",
            3 => "Heart",
            4 => "Spade"
        ];

        $this->assertEquals($expected, $card->getSuit());
    }

    public function testValue()
    {
        $card = new Card(suit, value);
        $expected = [
            "A" => 1,
            "2" => 2,
            "3" => 3,
            "4" => 4,
            "5" => 5,
            "6" => 6,
            "7" => 7,
            "8" => 8,
            "9" => 9,
            "10" => 10,
            "J" => 11,
            "Q" => 12,
            "K" => 13
        ];

        $this->assertEquals($expected, $card->getValue());
    }

}