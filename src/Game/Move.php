<?php

namespace App\Game;

class Move
{
    /**
     * @var int
     */
    private $pos;

    /**
     * @var int
     */
    private $roll;

    /**
     * @var string|null
     */
    private $type;

    public function __construct(int $pos, int $roll, ?string $type = null)
    {
        $this->pos = $pos;
        $this->roll = $roll;
        $this->type = $type;
    }

    public function getPos(): int
    {
        return $this->pos;
    }

    public function getRoll(): int
    {
        return $this->roll;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
