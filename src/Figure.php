<?php

namespace JeroenvanRensen\Geometry;

class Figure
{
    public function __construct(
        public int $xMin,
        public int $xMax,
        public int $yMin,
        public int $yMax,
        public string $background = '#FFFFFF',
        public array $items = []
    ) {
    }

    public function render(): string
    {
        $width = abs($this->xMax - $this->xMin);

        $height = abs($this->yMax - $this->yMin);

        $svg = "<svg viewBox=\"0 0 {$width} {$height}\" style=\"background: {$this->background}; width: {$width}px;\">";

        foreach ($this->items as $item) {
            $svg .= $item->render($this);
        }

        $svg .= '</svg>';

        return $svg;
    }

    public function lineSegment(array $from, array $to): void
    {
        $this->items[] = new LineSegment(new Coordinate($from), new Coordinate($to));
    }
}
