<?php

class Player {

    private $id;
    private $hand;

    public function __construct($id, $hand)
    {
        $this->id = $id;
        $this->hand = [];

    }

    public function getId()
    {
        return $this->id;
    }

    public function getHand()
    {
        return $this->hand;
    }


}