<?php

namespace Aktaa\UnitConversions\Tests;

use Aktaa\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
