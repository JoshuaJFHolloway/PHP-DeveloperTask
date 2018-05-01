<?php

require 'Deck.php';

class DeckTest extends PHPUnit\Framework\TestCase {


    public function testClassHasAttributeDeck()
    {
        $this->assertClassHasAttribute('deck', 'Deck');
    }

    public function testCreateSuit()
    {
        $deck= new Deck;
        $suits=$deck->createSuit("");
        $this->assertInternalType('array', $suits);
        $this->assertEquals(13, count($suits));
        $first=$suits[0];
        $this->assertInstanceOf('Card', $first);
        $this->assertObjectHasAttribute('suit', $first);
    }

    public function testCreateDecks()
    {
        $deck= new Deck;
        $deckS=$deck->createDeck();
        $this->assertInternalType('array', $deckS);
        $this->assertEquals(52,count($deckS));
        $first=$deckS[0];
        $this->assertInstanceOf('Card', $first);
//        $this->assertObjectHasAttribute("diamonds", $first);

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