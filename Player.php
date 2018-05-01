<?php

//require 'Card.php';

class Player {

    private $id;
    private $hand;

    public function __construct($id)
    {
        $this->id = $id;
        $this->hand = new ArrayObject();

    }

    public function getId()
    {
        return $this->id;
    }

    public function getHand()
    {
        return $this->hand;
    }

    public function addCard(Card $card)
    {
        $this->hand->append($card);
    }

}