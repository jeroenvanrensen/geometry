<?php

namespace JeroenvanRensen\Geometry;

class Figure
{
    public int $xMin;

    public int $xMax;

    public int $yMin;

    public int $yMax;

    public string $background;

    public function __construct(int $xMin, int $xMax, int $yMin, int $yMax, string $background = '#FFFFFF')
    {
        $this->xMin = $xMin;
        $this->xMax = $xMax;
        $this->yMin = $yMin;
        $this->yMax = $yMax;
        $this->background = $background;
    }

    public function render(): string
    {
        $width = abs($this->xMax - $this->xMin);

        $height = abs($this->yMax - $this->yMin);

        $svg = "<svg viewBox=\"0 0 {$width} {$height}\" style=\"background: {$this->background}; width: {$width}px;\">";

        $svg .= '</svg>';

        return $svg;
    }
}
