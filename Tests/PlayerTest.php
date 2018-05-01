<?php

require 'src/Player.php';

class PlayerTest extends PHPUnit\Framework\TestCase {

    public function setUp() {
        $this->player = new Player("George");
    }

    public function testClassHasAttributeId()
    {
        $this->assertClassHasAttribute('id', 'Player');
    }

    public function testGetId()
    {
        $player = $this->player;
        $expected = "George";

        $this->assertEquals($expected, $player->getId());
    }

    public function testGetHand()
    {
        $player = $this->player;
        $expected = new ArrayObject();

        $this->assertEquals($expected, $player->getHand());
    }

}