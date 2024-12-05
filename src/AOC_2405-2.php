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
  $updates = $updatesCopy = explode(',', $s2);
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
  if ($found) continue;
  //
  //
  $posfs = -1;
  $posl = 1;
  while (true) {
    $updates = $updatesCopy;
    $update = array_shift($updates);
    $posf = 0;
    $found = true;
    while ($updates) {
      if (!$order[$update] or array_diff($updates, $order[$update])) {
        $found = false;
        break;
      }
      $update = array_shift($updates);
      $posf++;
    }
    if ($found) {
      $tot += $updatesCopy[(count($updatesCopy)-1)/2];
      break;
    }
    else {
      if ($posf == $posfs)
        $posl++;
      else
        $posl = $posf + 1;
      $posfs = $posf;
      $s3 = $updatesCopy[$posf];
      $updatesCopy[$posf] = $updatesCopy[$posl];
      $updatesCopy[$posl] = $s3;
    }
  }
}

echo "Result: " . $tot;

?>
