<?php

namespace JeroenvanRensen\Geometry;

abstract class Item
{
    abstract public function render(Figure $figure): string;

    protected function getXCoord(Figure $figure, int $x): int
    {
        return abs($figure->xMin - $x);
    }

    protected function getYCoord(Figure $figure, int $y): int
    {
        return $figure->yMax - $y;
    }
}
