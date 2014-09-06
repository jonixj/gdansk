<?php

require_once "Rectangle.php";

$r1 = new Rectangle();
$r1->setLength($x1 = 5);
$r1->setHeight($y1 = 10);

$shapes = [$r1];

foreach ($shapes as $shape) {
    echo "The sides are {$x1} and {$y1}, the area is {$r1->getArea()}\n";
}

