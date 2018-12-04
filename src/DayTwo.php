<?php

namespace shawnlindstrom\aoc18;

class DayTwo
{
    /**
     * @param string $input
     * @return int
     */
    public static function run($input): int
{
        $items = file($input);

        $two = 0;
        $three = 0;
        foreach ($items as $item) {
            foreach (array_unique(count_chars($item, 1)) as $count) {
                if ($count === 2) {
                    $two++;
                }
                if ($count === 3) {
                    $three++;
                }
            }
        }

        return $two * $three;
    }
}
