<?php

class Deck {

    public function createSuit($suit)
    {
        return array(
            new Card($suit, 'A'),
            new Card($suit, '2'),
            new Card($suit, '3'),
            new Card($suit, '4'),
            new Card($suit, '5'),
            new Card($suit, '6'),
            new Card($suit, '7'),
            new Card($suit, '8'),
            new Card($suit, '9'),
            new Card($suit, '10'),
            new Card($suit, 'J'),
            new Card($suit, 'Q'),
            new Card($suit, 'K')
        );
    }

    public function createDeck() {
        return array_merge(
            $this->createSuit('diamonds'),
            $this->createSuit('hearts'),
            $this->createSuit('clubs'),
            $this->createSuit('spades')
        );
    }

    public function randomShuffle($createDeck) {
        for($i = 0; $i < sizeof($createDeck); ++$i) {
            $r = rand(0, $i);
            $tmp = $createDeck[$i];
            $createDeck[$i] = $createDeck[$r];
            $createDeck[$r] = $tmp;

            return $createDeck;
        }
    }

    public function dealCards($createDeck){
        return $this->randomShuffle($createDeck);
    }

    }


