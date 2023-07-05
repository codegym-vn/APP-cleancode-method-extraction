<?php

require __DIR__ . "/../src/Cylinder.php";

use PHPUnit\Framework\TestCase;

final class CylinderTest extends TestCase
{
    /**
     *Test
     *DisplayName("Testing getVolume(0, 0)")
     */
    function testGetVolume0And0()
    {
        $radius = 0;
        $height = 0;
        $expected = 0;

        $result = Cylinder::getVolume($radius, $height);
        $this->assertEquals($expected, $result);
    }

    /**
     *Test
     *DisplayName("Testing getVolume(1, 2)")
     */

    function testGetVolume1And2()
    {
        $radius = 1;
        $height = 2;
        $expected = 18.84955592153876;

        $result = Cylinder::getVolume($radius, $height);
        $this->assertEquals($expected, $result);
    }
}
