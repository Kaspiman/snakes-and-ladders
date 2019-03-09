<?php

namespace App\Game;

final class DiceRoller
{
    const MIN = 1;

    const MAX = 6;

    public function roll(): int
    {
        return random_int(self::MIN, self::MAX) + random_int(self::MIN, self::MAX);
    }
}
