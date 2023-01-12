<?php

namespace JeroenvanRensen\Geometry;

class Coordinate
{
    public int $x;

    public int $y;

    public function __construct(array $coords)
    {
        $this->x = $coords[0];
        $this->y = $coords[1];
    }
}
