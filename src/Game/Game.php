<?php

namespace App\Game;

final class Game
{
    /**
     * @var DiceRoller
     */
    private $diceRoller;

    /**
     * @var MoveMaker
     */
    private $moveMaker;

    /**
     * @var int
     */
    private $currentPos;

    /**
     * Game constructor.
     *
     * @param DiceRoller $diceRoller
     * @param MoveMaker $moveMaker
     */
    public function __construct(DiceRoller $diceRoller, MoveMaker $moveMaker)
    {
        $this->diceRoller = $diceRoller;
        $this->moveMaker = $moveMaker;
    }

    /**
     * The main game cycle
     * @return iterable
     */
    public function play(): iterable
    {
        $this->init();

        while ($this->canPlay()) {
            yield $this->move();
            $this->sleep();
        }
    }

    private function init(): void
    {
        $this->currentPos = 1;
    }

    private function canPlay(): bool
    {
        return $this->moveMaker->canMove($this->currentPos);
    }

    private function move(): string
    {
        $move = $this->moveMaker->move($this->currentPos, $this->diceRoller->roll());
        $this->currentPos = $move->getPos();

        return $move->getRoll(). ' - ' . ($move->getType() ? $move->getType() . ' ' : '') . $move->getPos();
    }

    private function sleep(): void
    {
        sleep(1);
    }
}
