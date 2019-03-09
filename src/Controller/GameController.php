<?php

namespace App\Controller;

use App\Game\Game;

final class GameController
{
    /**
     * @var Game
     */
    private $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function run(): iterable
    {
        return $this->game->play();
    }
}
