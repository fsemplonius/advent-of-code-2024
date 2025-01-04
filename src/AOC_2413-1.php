<?php

include 'Puzzle_2413.php';
$input = explode("\r\n", $s1);

while ($s1 = next($input)) {
  $x = $y = array ();
  for ($i=0; $i<2; $i++) {
    list ($x1, $y1) = explode (', ', explode (': ', $s1)[1]);
    $x[] = explode('+', $x1)[1];
    $y[] = explode('+', $y1)[1];
    $s1 = next($input);
  }
  list ($x1, $y1) = explode (', ', explode (': ', $s1)[1]);
  $xp = explode('=', $x1)[1];
  $yp = explode('=', $y1)[1];
  $xs = $ys = 0;
  $cost = 1000000;
  for ($i=1; $i<=100; $i++) {
    $xt = $xs += $x[0];
    $yt = $ys += $y[0];
    for ($j=1; $j<=100; $j++) {
      $xt += $x[1]; $yt += $y[1];
      if ($xt == $xp and $yt == $yp) {
        $cost = min($cost, $i*3+$j);
      }
    }
  }
  if ($cost < 1000000) $tot += $cost;
  next($input);
}

echo 'Result: ' . $tot;

?>