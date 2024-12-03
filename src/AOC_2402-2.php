<?php

//
//
function check ($s2) {
  $i = 0;
  if ($s2[$i] == $s2[$i+1] or abs($s2[$i] - $s2[$i+1]) > 3) return false;
  $sign = $s2[$i] < $s2[$i+1];
  $found = true;
  while ($s2[++$i+1]) {
    if ($s2[$i] == $s2[$i+1] or $sign != ($s2[$i] < $s2[$i+1]) or abs($s2[$i] - $s2[$i+1]) > 3) {
      $found = false;
      break;
    }
  }
  return $found;
}

include 'Puzzle_2402.php';
$input = explode("\r\n", $s1);

$tot = 0;
while ($s1=next($input)) {
  $s2 = explode(' ', $s1);
  if (check($s2)) {
    $tot++;
  }
  else {
    for ($i=0; $i<count($s2); $i++) {
      $s3 = $s2;
      array_splice($s3, $i, 1);
      if (check($s3)) {
        $tot++;
        break;
      }
    }
  }
}

echo "Result: $tot";

?>
