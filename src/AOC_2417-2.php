<?php

// Based on:
// https://www.reddit.com/r/adventofcode/comments/1hgcuw8/2024_day_17_part_2_any_hints_folks/?rdt=59282
// Needs to be worked out still

include 'Puzzle_2417.php';
$input = explode("\r\n", $s1);

$regA = explode(': ', next($input))[1];
$regB = explode(': ', next($input))[1];
$regC = explode(': ', next($input))[1];
next($input);
$instrs = explode(',', explode(': ', next($input))[1]);

$tot = 0;
foreach (array_reverse($instrs) as $instr) {
  $tot = $tot*8 + $instr;
}
$tot *= 8;
echo sprintf('%o', $tot);
echo '\n Result: ' . $tot;

?>