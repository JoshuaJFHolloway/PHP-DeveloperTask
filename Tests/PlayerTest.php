<?php

require 'Player.php';

class PlayerTest extends PHPUnit\Framework\TestCase {

    public function testGetId()
    {
        $card = new Player("monkey", hand);
        $expected = "monkey";

        $this->assertEquals($expected, $card->getId());
    }

    public function testGetHand()
    {
        $card = new Player(id, hand);
        $expected = [];

        $this->assertEquals($expected, $card->getHand());
    }

}