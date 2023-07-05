<?php

class Cylinder
{
    static function getVolume($radius, $height): float|int
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        return $perimeter * $height + 2 * $baseArea;
    }
}