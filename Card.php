<?php

class Card {

    protected $suit;
    protected $value;

    public function __construct($suit, $value) {

        $this->suit = $suit;
        $this->value = $value;

    }

    public function getSuit() {
        return $this->suit;
    }

    public function getValue() {
        return $this->value;
    }

    public function __toString() {
        return json_encode($this->getObjectProperties());
    }

    public function getObjectProperties() {
        return get_object_vars($this);
    }
}