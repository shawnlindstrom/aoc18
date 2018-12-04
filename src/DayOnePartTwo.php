<?php

namespace shawnlindstrom\aoc18;

class DayOnePartTwo
{
    /**
     * @return int
     */
    public function __invoke(): int
    {
        $items = file('./data/day1input.txt');
        $result = 0;
        $frequencies = [];
        while (true) {
            foreach ($items as $item) {
                \preg_match('/(\D)(\d+)/', $item, $matches);
                switch ($matches[1]) {
                    case '+':
                        $result += (int)$matches[2];
                        if (\in_array($result, $frequencies, false)) {
                            return $result;
                        }
                        $frequencies[] = $result;
                        break;
                    case '-':
                        $result -= (int)$matches[2];
                        if (\in_array($result, $frequencies, false)) {
                            return $result;
                        }
                        $frequencies[] = $result;
                        break;
                    default:
                        break;
                }
            }
        }
    }
}
