<?php

use JeroenvanRensen\Geometry\Figure;

it('can instantiate a new figure', function () {
    $figure = new Figure(xMin: 0, xMax: 500, yMin: 0, yMax: 500);
    expect($figure->render())->toBe('<svg viewBox="0 0 500 500" style="background: #FFFFFF; width: 500px;"></svg>');
});

it('can render figures with other dimensions', function () {
    $figure = new Figure(xMin: -200, xMax: 200, yMin: -50, yMax: 100);
    expect($figure->render())->toBe('<svg viewBox="0 0 400 150" style="background: #FFFFFF; width: 400px;"></svg>');
});

it('can customize the background color', function () {
    $figure = new Figure(xMin: 0, xMax: 500, yMin: 0, yMax: 500, background: '#FF0000');
    expect($figure->render())->toBe('<svg viewBox="0 0 500 500" style="background: #FF0000; width: 500px;"></svg>');
});

it('can plot a line segment', function () {
    $figure = new Figure(-200, 200, -200, 200);
    $figure->lineSegment([100, 50], [200, 200]);
    expect($figure->render())->toBe('<svg viewBox="0 0 400 400" style="background: #FFFFFF; width: 400px;"><line x1="300" y1="150" x2="400" y2="0" stroke="black" stroke-width="2" /></svg>');
});
