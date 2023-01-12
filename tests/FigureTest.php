<?php

use JeroenvanRensen\Geometry\Figure;

it('can instantiate a new figure', function () {
    $figure = new Figure(xMin: 0, xMax: 500, yMin: 0, yMax: 500);
    expect($figure->render())->toBe('<svg viewBox="0 0 500 500" style="background: white; width: 500px;"></svg>');
});
