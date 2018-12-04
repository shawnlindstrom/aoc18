<?php

namespace shawnlindstrom\aoc18\Tests;

use shawnlindstrom\aoc18\DayOne;
use PHPUnit\Framework\TestCase;
use shawnlindstrom\aoc18\DayOnePartTwo;

class DayOneTest extends TestCase
{
    /** @test */
    public function it_determines_the_frequency()
    {
        $result = (new DayOne())->__invoke();

        $this->assertEquals(578, $result);
    }

    /** @test */
    public function it_finds_the_first_repeated_frequency()
    {
        $result = (new DayOnePartTwo())->__invoke();

        $this->assertEquals(82516, $result);
    }
}
