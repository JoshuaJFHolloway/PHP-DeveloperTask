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


    public function testGetObjectProperties()
    {
        $player = $this->player;
        $expected = Array ('id' => 'George', 'hand' => new ArrayObject());

        $this->assertEquals($expected, $player->getObjectProperties());
    }

    public function test__ToStringIsJSON()
    {
        $player = $this->player;
        $this->assertJson($player->__toString());
    }

    public function test__ToStringCreatesCorrectJSONFile()
    {
        $player = $this->player;
        $testGetObjectProperties= Array ('id' => 'George', 'hand' => new ArrayObject());
        $expected = json_encode($testGetObjectProperties);

        $this->assertEquals($expected, $player->__toString());
    }


}