<?php

namespace VendorName\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use VendorName\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */

    // Question: Each test case program file can have one test case function only?
    
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        // test case for failure result
        //$this->assertEquals(221.4623, $lbs);

        // test case for OK result
        $this->assertEquals(220.4623, $lbs);
    }
    
}
