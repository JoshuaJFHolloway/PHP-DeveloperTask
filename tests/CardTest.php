<?php


class CardTest extends PHPUnit\Framework\TestCase
{

    public function setUp() {
        $this->card = new Card("Heart", 12);
    }

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
        $card = $this->card;
        $expected = "Heart";

        $this->assertEquals($expected, $card->getSuit());
    }

    public function testGetValue()
    {
        $card = $this->card;
        $expected = "12";

        $this->assertEquals($expected, $card->getValue());
    }

    public function testGetObjectProperties()
    {
        $card = $this->card;
        $expected = Array ('suit' => 'Heart', 'value' => 12);

        $this->assertEquals($expected, $card->getObjectProperties());
    }

    public function test__ToStringIsJSON()
    {
        $card = $this->card;
        $this->assertJson($card->__toString());
    }

    public function test__ToStringCreatesCorrectJSONFile()
    {
        $card = $this->card;
        $testGetObjectProperties= Array ('suit' => 'Heart', 'value' => 12);
        $expected = json_encode($testGetObjectProperties);

        $this->assertEquals($expected, $card->__toString());
    }

}

