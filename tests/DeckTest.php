<?php
require 'src/Deck.php';

class DeckTest extends PHPUnit\Framework\TestCase
{

    public function testClassHasAttributeDeck()
    {
        $this->assertClassHasAttribute('deck', 'Deck');
    }

    public function testCreateSuitCreates13HeartArray()
    {
        $deck = new Deck;
        $suits = $deck->createSuit("hearts");
        $this->assertInternalType('array', $suits);
        $this->assertEquals(13, count($suits));
    }

    public function testCreateSuitHasCorrectCardKeyAndValue()
    {
        $deck = new Deck;
        $suits = $deck->createSuit("hearts");
        $first = $suits[0];
        $this->assertInstanceOf('Card', $first);
        $this->assertObjectHasAttribute('suit', $first);
        $this->assertEquals("hearts", $first->getSuit());
        $this->assertEquals("K", $first->getValue());
    }

    public function testCreateDeck()
    {
        $deck = new Deck;
        $createdDeck = $deck->createDeck();
        $this->assertInternalType('array', $createdDeck);
    }

    public function testCreateDeckFirstCardCorrect()
    {
        $deck = new Deck;
        $deckCreated = $deck->createDeck();
        $first = $deckCreated[0];
        $this->assertEquals("diamonds", $first->getSuit());
        $this->assertEquals("K", $first->getValue());
    }

    public function testCreateDeckLastCardCorrect()
    {
        $deck = new Deck;
        $deckCreated = $deck->createDeck();
        $first = $deckCreated[51];
        $this->assertEquals("hearts", $first->getSuit());
        $this->assertEquals("A", $first->getValue());
    }

    public function testisFullDeck()
    {
        $deck = new Deck;
        $fullDeck = $deck->isFullDeck();
        $this->assertEquals(52, $fullDeck);
    }


    public function testGetIterator()
    {
        $deck = new Deck;
        $getIterator = $deck->getIterator();
        $expected = $deck->createDeck();

        $this->assertEquals($expected, iterator_to_array($getIterator));
    }

    public function testRandomShuffle()
    {

        $deck = new Deck;
        $randomShuffle = $deck->randomShuffle();
        $expected = $deck->createDeck();

        $this->assertNotEquals($expected, $randomShuffle);

    }

    public function testOffsetGet()
    {

        $deck = new Deck;
        $deckCreated = $deck->createDeck();
        $first = $deckCreated[1];
        $offsetGet = $deck->offsetGet(1);

        $this->assertEquals($first, $offsetGet);
    }

    public function testOffsetExistsIsPresent()
    {

        $deck = new Deck;

        $this->assertTrue(method_exists($deck, 'OffsetExists'));

    }

    public function testOffsetSetsIsPresent()
    {

        $deck = new Deck;

        $this->assertTrue(method_exists($deck, 'offsetSet'));

    }

    public function testOffsetUnsetIsPresent()
    {

        $deck = new Deck;

        $this->assertTrue(method_exists($deck, 'offsetUnset'));

    }

    public function testCheckIfAnyIndexIsSame()
    {

        $deck = new Deck;
        $deck->checkIfAnyIndexIsSame();
        $shuffledDeck = $deck->deck;
        $perfectDeck = $deck->createDeck();

        $array_one = $shuffledDeck;
        $array_two = $perfectDeck;

        $this->assertNotTrue($this->checkIfIndexSame($array_one, $array_two));
    }

    public function checkIfIndexSame($array_one, $array_two)
    {

        foreach ($array_one as $array_one_key => $array_one_value) {
            foreach ($array_two as $array_two_key => $array_two_value) {
                if ($array_one_key == $array_two_key && $array_two_value == $array_one_value) {
                    return true;
                }
            }
        }
    }
}

//    public function testGetIterator()
//    {
//        $mock = \Mockery::mock('ArrayIterator');
//        $deck = new Deck;
//        $items = $deck->createDeck();
//
//        $this->testGetIterator($mock, $items);
//    }
