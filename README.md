# Advent of Code 2018

These are my PHP solutions for 2018's [Advent of Code](https://adventofcode.com).

### Day One
Tried to use ```eval()``` but felt dirty for doing so. Opted for ```preg_match()``` to
get the operator and add or subtract as necessary.

For part two, I just accumulated results in a "frequencies" array. Once I found a match,
I simply returned the result.

### Day Two
I spent way too much time trying to find a regular expression that would match two and only
repeating characters. I resorted to a combination of ```count_chars()``` and ```array_unique()``` for part one.

In part two, I broke out my old pals ```similar_text()``` and ```array_intersect()```. 
