<?php

//
//
include 'Puzzle_2403.php';
$input = explode("\r\n", $s1);

$tot = 0;
while ($s1=next($input)) {
  $pos = 0;
  while (($pos=strpos($s1,'mul(',$pos)) !== false) {
    $nt1 = $nt2 = 0;
    $pos += 4;
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
