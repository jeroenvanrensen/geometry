<?php

namespace JeroenvanRensen\Geometry;

class LineSegment extends Item
{
    public function __construct(
        public Coordinate $from,
        public Coordinate $to,
        public string $color
    ) {
    }

    public function render(Figure $figure): string
    {
        $x1 = $this->getXCoord($figure, $this->from->x);
        $y1 = $this->getYCoord($figure, $this->from->y);
        $x2 = $this->getXCoord($figure, $this->to->x);
        $y2 = $this->getYCoord($figure, $this->to->y);

        return "<line x1=\"{$x1}\" y1=\"{$y1}\" x2=\"{$x2}\" y2=\"{$y2}\" stroke=\"{$this->color}\" stroke-width=\"2\" />";
    }
}
