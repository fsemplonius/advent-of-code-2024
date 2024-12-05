<?php

include 'Puzzle_2405.php';
$input = explode("\r\n", $s1);
$order = array ();
while ($s2=next($input)) {
  list ($s3, $s4) = explode('|', $s2);
  $order[$s3][] = $s4;
}

$tot = 0;
while ($s2=next($input)) {
  $updates = explode(',', $s2);
  $middle = $updates[(count($updates)-1)/2];
  $found = true;
  $update = array_shift($updates);
  while ($updates) {
    if (!$order[$update] or array_diff($updates, $order[$update])) {
      $found = false;
      break;
    }
    $update = array_shift($updates);
  }
  if ($found) $tot += $middle;
}

echo "Result: " . $tot;

?>
