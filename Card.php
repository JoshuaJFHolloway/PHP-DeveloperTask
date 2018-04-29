<?php

class Card {

    protected $suit;
    protected $value;

    public function __construct($suit, $value)
    {
        $suit = [
            1 => "Diamond",
            2 => "Club",
            3 => "Heart",
            4 => "Spade"
        ];

        $value = [
            "A" => 1,
            "2" => 2,
            "3" => 3,
            "4" => 4,
            "5" => 5,
            "6" => 6,
            "7" => 7,
            "8" => 8,
            "9" => 9,
            "10" => 10,
            "J" => 11,
            "Q" => 12,
            "K" => 13
        ];

        $this->suit = $suit;
        $this->value = $value;

    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getValue()
    {
        return $this->value;
    }


}