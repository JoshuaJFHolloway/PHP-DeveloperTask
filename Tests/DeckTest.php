<?php

require 'Deck.php';

class DeckTest extends PHPUnit\Framework\TestCase {


    public function testClassHasAttributeDeck()
    {
        $this->assertClassHasAttribute('deck', 'Deck');
    }

    public function testCreateSuitCreates13HeartArray()
    {
        $deck= new Deck;
        $suits=$deck->createSuit("hearts");
        $this->assertInternalType('array', $suits);
        $this->assertEquals(13, count($suits));
    }

    public function testCreateSuitHasCorrectCardKeyAndValue()
    {
        $deck= new Deck;
        $suits=$deck->createSuit("hearts");
        $first=$suits[0];
        $this->assertInstanceOf('Card', $first);
        $this->assertObjectHasAttribute('suit', $first);
        $this->assertEquals("hearts", $first->getSuit());
        $this->assertEquals("K", $first->getValue());
    }

    public function testCreateDeck()
    {
        $deck = new Deck;
        $decks = $deck->createDeck();
        $this->assertInternalType('array', $decks);
        $this->assertEquals(52, count($decks));
    }

    public function testCreateDeckFirstCardCorrect()
    {
        $deck = new Deck;
        $deckCreated=$deck->createDeck();
        $first=$deckCreated[0];
        $this->assertEquals("diamonds", $first->getSuit());
        $this->assertEquals("K", $first->getValue());
    }

    public function testCreateDeckLastCardCorrect()
    {
        $deck = new Deck;
        $deckCreated=$deck->createDeck();
        $first=$deckCreated[51];
        $this->assertEquals("hearts", $first->getSuit());
        $this->assertEquals("A", $first->getValue());
    }

//    public function testRandomShuffle()
//    {
//        $card = new Card(arg1, arg2);
//        $deck = new Deck;
//
//        $expected  = array_fill(0, 52, $card);
//
//        $this->assertEquals($expected, $deck->randomShuffle());
//
//    }

}