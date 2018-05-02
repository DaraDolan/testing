<?php


use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

    public function testImage_WithNull_ReturnPlaceHolder()
    {
        $game = new Game();
        $game->setImagePath(null);
        $this->assertEquals('/images/placeholder.jpg', $game->getImagePath());
    }
}