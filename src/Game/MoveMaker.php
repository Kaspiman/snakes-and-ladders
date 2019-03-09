<?php

namespace App\Game;

final class MoveMaker
{
    // game field length
    const POS_START = 1;
    const POS_END = 100;

    // constants for jump logic
    const SNAKE_STEP_DIVISOR = 9;
    const SNAKE_STEP_MOVES = 3;

    const LADDER_STEP_DIGITS = [25, 55];
    const LADDER_STEP_MOVES = 10;

    // how many cells for end
    const NEAR_THE_END = 4;

    /**
     * @var int
     */
    private $currentPos;

    /**
     * @var int
     */
    private $roll;

    /**
     * Main move method for all logic
     *
     * @param int $currentPos
     * @param int $roll
     *
     * @return Move
     */
    public function move(int $currentPos, int $roll): Move
    {
        $this->currentPos = $currentPos + $roll;
        $this->roll = $roll;

        if ($this->checkEnd()) {
            return $this->standStill();
        }

        if ($this->checkIsSnake()) {
            return $this->moveOnSnake();
        }

        if ($this->checkIsLadder()) {
            return $this->moveOnLadder();
        }

        return $this->commonMove();
    }

    /**
     * @param int $currentPos
     *
     * @return bool
     */
    public function canMove(int $currentPos): bool
    {
        return $currentPos < self::POS_END;
    }

    private function checkIsSnake(): bool
    {
        return $this->currentPos % self::SNAKE_STEP_DIVISOR === 0;
    }

    private function moveOnSnake(): Move
    {
        return new Move($this->currentPos - self::SNAKE_STEP_MOVES, $this->roll, 'snake');
    }

    private function checkIsLadder(): bool
    {
        return in_array($this->currentPos, self::LADDER_STEP_DIGITS);
    }

    private function moveOnLadder(): Move
    {
        return new Move($this->currentPos + self::LADDER_STEP_MOVES, $this->roll, 'ladder');
    }

    private function checkEnd(): bool
    {
        $diff = self::POS_END - $this->currentPos;
        return $this->currentPos > self::POS_END || ($diff <= self::NEAR_THE_END && $diff > 1);
    }

    private function standStill(): Move
    {
        return new Move($this->currentPos - $this->roll, $this->roll);
    }

    private function commonMove(): Move
    {
        return new Move($this->currentPos, $this->roll);
    }
}
