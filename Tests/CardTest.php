<?php


class CardTest extends PHPUnit\Framework\TestCase
{

    public function testClassHasAttributeSuit()
    {
        $this->assertObjectHasAttribute('suit', new Card(suit, value));
    }

    public function testClassHasAttributeValue()
    {
        $this->assertObjectHasAttribute('value', new Card(suit, value));
    }

    public function testGetSuit()
    {
        $card = new Card("Heart", 12);
        $expected = "Heart";

        $this->assertEquals($expected, $card->getSuit());
    }

    public function testValue()
    {
        $card = new Card("Heart", 12);
        $expected = "12";

        $this->assertEquals($expected, $card->getValue());
    }

}

