<?php


class CardTest extends PHPUnit\Framework\TestCase
{

    public function testClassHasAttributeSuit()
    {
        $this->assertClassHasAttribute('suit', 'Card');
    }

    public function testClassHasAttributeValue()
    {
        $this->assertClassHasAttribute('value', 'Card');
    }

    public function testGetSuit()
    {
        $card = new Card("Heart", 12);
        $expected = "Heart";

        $this->assertEquals($expected, $card->getSuit());
    }

    public function testGetValue()
    {
        $card = new Card("Heart", 12);
        $expected = "12";

        $this->assertEquals($expected, $card->getValue());
    }

    public function testGetObjectProperties()
    {
        $card = new Card("Heart", 12);
        $expected = Array ('suit' => 'Heart', 'value' => 12);

        $this->assertEquals($expected, $card->getObjectProperties());
    }

    public function test__ToStringIsJSON()
    {
        $card = new Card("Heart", 12);
        $this->assertJson($card->__toString());
    }

    public function test__ToStringCreatesCorrectJSONFile()
    {
        $card = new Card("Heart", 12);
        $testGetObjectProperties= Array ('suit' => 'Heart', 'value' => 12);
        $expected = json_encode($testGetObjectProperties);

        $this->assertEquals($expected, $card->__toString());
    }

}

