<?php

//
//
include 'Puzzle_2403.php';
$input = explode("\r\n", $s1);

$tot = 0;
$en = true;
while ($s1=next($input)) {
  $pos = 0;
  while (true) {
    $posm = strpos($s1, 'mul(',     $pos);
    $posn = strpos($s1, 'don\'t()', $pos);
    $post = strpos($s1, 'do()',     $pos);
    // Find first
    if ($posm === false) $posm = 9999;
    if ($posn === false) $posn = 9999;
    if ($post === false) $post = 9999;
    if (($pos1=min($posn,$post)) < $posm) {
      $en = $post < $posn;
      $pos = $pos1 + 4;
      continue;
    }
    if ($posm == 9999) break;
    if (!$en) {
      if ($pos1 == 9999) break;
      $pos = $pos1;
      continue;
    }
    $pos = $posm + 4;
    $nt1 = $nt2 = 0;
    while (($n=$s1[$pos]) >= '0' and $s1[$pos] <= '9') {
      $nt1 = $nt1*10 + $n;
      $pos++;
    }
    if (!$nt1 or $s1[$pos] != ',') continue;
    $pos++;
    while (($n=$s1[$pos]) >= '0' and $s1[$pos] <= '9') {
      $nt2 = $nt2*10 + $n;
      $pos++;
    }
    if ($s1[$pos] != ')') continue;
    $tot += $nt1 * $nt2;
  }
}

echo "Result: $tot";

?>
