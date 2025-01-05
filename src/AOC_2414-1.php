<?php

include 'Puzzle_2414.php';
$input = explode("\r\n", $s1);


$xt = 101; $yt = 103; $sec = 100;
$tot = 0;
$tiles = array ();
while ($s1 = next($input)) {
  $s2 = explode(' v=', substr($s1, 2));
  list ($px, $py, $vx, $vy) = explode(',', $s2[0].','.$s2[1]);
  $xe = ($px+$sec*$vx) % $xt;
  if ($xe < 0) $xe += $xt;
  $ye = ($py+$sec*$vy) % $yt;
  if ($ye < 0) $ye += $yt;
  if (!isset($tiles[$xe][$ye])) $tiles[$xe][$ye] = 1;
  else $tiles[$xe][$ye]++;
}

$qts = array (array (0, ($xt-3)/2, 0, ($yt-3)/2), 
             array (($xt+1)/2, $xt-1, 0, ($yt-3)/2),
             array (0, ($xt-3)/2, ($yt+1)/2, $yt-1), 
             array (($xt+1)/2, $xt-1, ($yt+1)/2, $yt-1));

$qttot = array(0,0,0,0);
$i = 0;
foreach ($qts as $qt) {
  for ($x=$qt[0]; $x<=$qt[1]; $x++) {
    for ($y=$qt[2]; $y<=$qt[3]; $y++) {
      $qttot[$i] += $tiles[$x][$y];
    }
  }
  $i++;
}

$tot = 1;
foreach ($qttot as $qt) {
  $tot *= $qt;
}

echo 'Result: ' . $tot;

?>