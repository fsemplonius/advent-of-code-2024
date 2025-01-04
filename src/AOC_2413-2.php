<?php

include 'Puzzle_2413.php';
$input = explode("\r\n", $s1);

$tot = 0;
while ($s1 = next($input)) {
  $x = $y = array ();
  for ($i=0; $i<2; $i++) {
    list ($x1, $y1) = explode (', ', explode (': ', $s1)[1]);
    $x[] = explode('+', $x1)[1];
    $y[] = explode('+', $y1)[1];
    $s1 = next($input);
  }
  list ($x1, $y1) = explode (', ', explode (': ', $s1)[1]);
  $xp = explode('=', $x1)[1]+10000000000000;
  $yp = explode('=', $y1)[1]+10000000000000;
  // solve two equations; two unknown
  $j = ($xp*$y[0] - $yp*$x[0]) / ($x[1]*$y[0] - $y[1]*$x[0]);
  $i = ($yp - $y[1]*floor($j)) / $y[0];
  if ($i > 0 and $j > 0 and ($i - (int)$i < 0.0001) and ($x[0]*(int)$i + $x[1]*(int)$j == $xp)) {
    $tot += $i*3 + $j;
  }
  next($input);
}

echo 'Result: ' . $tot;

?>