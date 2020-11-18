<?php

namespace App\Services\SeasonDraw;

use App\Contracts\SeasonDraw;

class StabSeasonDraw implements SeasonDraw
{
    public function generate(): array
    {
        return [
            1 => [
                [1, 2],
                [3, 4]
            ],
            2 => [
                [1, 3],
                [2, 4]
            ],
            3 => [
                [1, 4],
                [2, 3]
            ],
            4 => [
                [4, 3],
                [2, 1]
            ],
            5 => [
                [4, 2],
                [3, 1]
            ],
            6 => [
                [4, 1],
                [3, 2]
            ],
        ];
    }
}
