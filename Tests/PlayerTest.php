<?php

require 'Player.php';

class PlayerTest extends PHPUnit\Framework\TestCase {

    public function testClassHasAttributeId()
    {
        $this->assertClassHasAttribute('id', 'Player');
    }

    public function testGetId()
    {
        $player = new Player("George");
        $expected = "George";

        $this->assertEquals($expected, $player->getId());
    }

    public function testGetHand()
    {
        $player = new Player(id);
        $expected = new ArrayObject();

        $this->assertEquals($expected, $player->getHand());
    }

}