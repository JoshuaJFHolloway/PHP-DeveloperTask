<?php

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

    // __toString() allows Player to be implicitly converted to string

    public function __toString() {
        return json_encode($this->getObjectProperties());
    }

    public function getObjectProperties() {
        return get_object_vars($this);
    }

//    public function addCard(Card $card)
//    {
//        $this->hand->append($card);
//    }

}