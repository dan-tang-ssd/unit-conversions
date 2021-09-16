<?php

namespace VendorName\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use VendorName\UnitConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */

    // Question: Each test case program file can have one test case function only?

    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        // test case for failure result
        //$this->assertEquals(211, $fahrenheit);

        // test case for OK result
        $this->assertEquals(212, $fahrenheit);
    }
}
