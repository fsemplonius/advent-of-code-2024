<?php

//
//
include 'Puzzle_2402.php';
$input = explode("\r\n", $s1);

$tot = 0;
while ($s1=next($input)) {
  $s2 = explode(' ', $s1);
  $i = 0;
  if ($s2[$i] == $s2[$i+1] or abs($s2[$i] - $s2[$i+1]) > 3) continue;
  $sign = $s2[$i] < $s2[$i+1];
  $found = true;
  while ($s2[++$i+1]) {
    if ($s2[$i] == $s2[$i+1] or $sign != ($s2[$i] < $s2[$i+1]) or abs($s2[$i] - $s2[$i+1]) > 3) {
      $found = false;
      break;
    }
  }
  if ($found) $tot++;
}

echo "Result: $tot";

?>
