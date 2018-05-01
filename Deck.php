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

    public function getIterator() {
        return new ArrayIterator($this->deck);
    }

    public function createDeck() {
        return array_merge(
            $this->createSuit('diamonds'),
            $this->createSuit('clubs'),
            $this->createSuit('spades'),
            $this->createSuit('hearts')
        );
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

        while(count(array_intersect_assoc($this->randomShuffle(), $this->createDeck()))) {
            var_dump('Array1:', $this->randomShuffle());
            var_dump('Array2:', $this->createDeck());
        }

    }


//    public function dealDeck () {
//        new Player("W", []);
//        new Player("X", []);
//        new Player("Y", []);
//        new Player("Z", []);
//    }

    public function encodedJSON() {
        $array = $this->deck;

        foreach($array as &$card) {
            $card = $card->__toString();
        }

        return $array;
    }



    public function offsetExists($index) {
        return array_key_exists($index, $this->deck);
    }

    public function offsetGet($index) {
        if (!$this->offsetExists($index)) {
            throw new OutOfBoundsException(
                "The index '$index' does not exist."
            );
        }
        return $this->deck[$index];
    }

    public function offsetSet($index, $value) {
        if (!($value instanceof Card))
            throw new InvalidArgumentException('Decks only contain cards.');

        if ($index == null) {
            $this->deck[] = $value;
            return;
        }

        if (!is_numeric($index) || $index != (int) $index) {
            throw new InvalidArgumentException("Index '$index' must be an integer.");
        }

        if (!$this->offsetExists($index)) {
            throw new OutOfBoundsException("Index '$index' does not exist");
        }

        $this->deck[$index] = $value;
    }

    public function offsetUnset($index) {
        if (!$this->offsetExists($index)) {
            throw new InvalidArgumentException("Index '$index' Does not exist.");
        }

        array_splice($this->deck, $index, 1);
    }



    }


