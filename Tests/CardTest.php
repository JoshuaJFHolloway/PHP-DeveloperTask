<?php

require 'Card.php';

class CardTest extends PHPUnit\Framework\TestCase {

    public function testHello()
    {
        $card = new Card;
        $expected = "hello";

        $this->assertEquals($expected, $card->hello());

    }
}