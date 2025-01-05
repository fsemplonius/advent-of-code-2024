<?php

include 'Puzzle_2414.php';
$input = explode("\r\n", $s1);

$sec = 0;
$xt = 101; $yt = 103;

while (true) {
  $sec++;
  $found = true;
  $tot = 0;
  $tiles = array ();
  reset ($input);
  while ($s1 = next($input)) {
    $s2 = explode(' v=', substr($s1, 2));
    list ($px, $py, $vx, $vy) = explode(',', $s2[0].','.$s2[1]);
    $xe = ($px+$sec*$vx) % $xt;
    if ($xe < 0) $xe += $xt;
    $ye = ($py+$sec*$vy) % $yt;
    if ($ye < 0) $ye += $yt;
    if (!isset($tiles[$xe][$ye])) 
      $tiles[$xe][$ye] = 1;
    else {
      $found = false;
      break;
    }
  }
  if ($found) break;
}

for ($x=0; $x<$xt; $x++) {    
  for ($y=0; $y<$yt; $y++) {
    if ($tiles[$y][$x])
      echo '#';
    else
      echo '.';
  }
  echo "\n";
}

echo 'Result: ' . $sec;

?>