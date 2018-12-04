<?php

namespace shawnlindstrom\aoc18;

class DayOne
{
    /**
     *
     * @return int
     */
    public function __invoke(): int
    {
        $items = file('./data/day1input.txt');
        $result = 0;
        foreach ($items as $item) {
            \preg_match('/(\D)(\d+)/', $item, $matches);

            switch ($matches[1]) {
                case '+':
                    $result += (int) $matches[2];
                    break;
                case '-':
                    $result -= (int) $matches[2];
                    break;
            }
        }

        return $result;
    }
}
