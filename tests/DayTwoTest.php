<?php

namespace shawnlindstrom\aoc18\Tests;

use shawnlindstrom\aoc18\DayTwo;
use shawnlindstrom\aoc18\DayTwoPartTwo;
use PHPUnit\Framework\TestCase;

class DayTwoTest extends TestCase
{
    /** @test */
    public function it_determines_the_checksum_for_the_test_data()
    {
        $result = DayTwo::run('./data/day2testinput.txt');

        $this->assertEquals(12, $result);
    }

    /** @test */
    public function it_determines_the_checksum_for_the_actual_data()
    {
        $result = DayTwo::run('./data/day2input.txt');

        $this->assertEquals(4980, $result);
    }

    /** @test */
    public function it_determines_which_two_codes_match_all_but_one_character_with_test_data()
    {
        $result = DayTwoPartTwo::run('./data/day2part2testinput.txt');

        $this->assertEquals('fgij', $result);
    }

    /** @test */
    public function it_determines_which_two_codes_match_all_but_one_character_with_actual_data()
    {
        $result = DayTwoPartTwo::run('./data/day2input.txt');

        $this->assertEquals('qysdtrkloagnfozuwujmhrbvx', $result);
    }
}
