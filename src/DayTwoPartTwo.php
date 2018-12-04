<?php

namespace shawnlindstrom\aoc18;

class DayTwoPartTwo
{
    /**
     * @param string $input
     * @retun int
     * @return string
     */
    public static function run($input): string
    {
        $items = file($input);

        $candidates = [];
        $matches = [];
        foreach ($items as $str1) {
            foreach ($items as $str2) {
                if (\similar_text($str1, $str2) === \strlen($str1) - 1) {
                    $candidates[] = $str1;
                    $matches[] = $str2;
                }
            }
        }

        $first_result = str_split(trim($candidates[0]));
        $second_result = str_split(trim($matches[0]));

        return implode(array_intersect($first_result, $second_result));
    }
}
