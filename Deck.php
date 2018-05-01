<?php

require 'Card.php';

class Deck implements IteratorAggregate, ArrayAccess {

    private $deck;

    public function __construct(array $deck=null) {
            $this->deck = $this->createDeck();
    }


    public function createSuit($suit) {
        return array(
            new Card($suit, 'K'),
            new Card($suit, 'Q'),
            new Card($suit, 'J'),
            new Card($suit, '10'),
            new Card($suit, '9'),
            new Card($suit, '8'),
            new Card($suit, '7'),
            new Card($suit, '6'),
            new Card($suit, '5'),
            new Card($suit, '4'),
            new Card($suit, '3'),
            new Card($suit, '2'),
            new Card($suit, 'A')
        );
    }

    public function createDeck() {
        return array_merge(
            $this->createSuit('diamonds'),
            $this->createSuit('clubs'),
            $this->createSuit('spades'),
            $this->createSuit('hearts')
        );
    }

    public function isFullDeck() {
        return count($this->deck);
    }

    public function getIterator() {
        return new ArrayIterator($this->deck);
    }


    public function randomShuffle() {
        for ($i = 0; $i < sizeof($this->deck); ++$i) {
            $r = rand(0, $i);

            $tmp = $this->deck[$i];
            $this->deck[$i] = $this->deck[$r];
            $this->deck[$r] = $tmp;
        }
        return $this->deck;
    }

    public function checkIfAnyIndexIsSame() {

        while(count(array_intersect_assoc($this->randomShuffle(), $this->createDeck())) >0) {
            $this->randomShuffle();
        }
    }

    public function offsetGet($index) {
        return $this->deck[$index];
    }

    public function offsetExists($index) {
    }

    public function offsetSet($index, $value) {
    }

    public function offsetUnset($index) {
    }

}


