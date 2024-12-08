<?php

// This took about 58 sec. running on Odroid M1 Ubuntu server 20.04/PHP7.4

$start = microtime(true);
include 'Puzzle_2407.php';
$input = explode("\r\n", $s1);

$mulAdd = array ();

while ($s1=next($input)) {
  list ($res, $dig) = explode(': ', $s1);
  $digits = explode(' ', $dig);
  $n = count($digits) - 1;
  for ($i=0; $i<$n; $i++) {
    $mulAdd[$i] = '+';
  }
  $lastMul = 0;
  while ($res != $resTot) {
    $resTot = $digits[0];
    for ($i=0; $i<$n; $i++) {
      if ($mulAdd[$i] == '+')
        $resTot += $digits[$i+1];
      elseif ($mulAdd[$i] == '*')
        $resTot *= $digits[$i+1];
      else
        $resTot .= $digits[$i+1];
    }
    if ($resTot == $res) {
      $tot += $res;
      break;
    }
    else
      $k = -1;
    while (++$k<$n) {
      if ($mulAdd[$k] == '+') {
        $mulAdd[$k] = '*';
        break;
      }
      elseif ($mulAdd[$k] == '*') {
        $mulAdd[$k] = '.';
        break;
      }
      else
        $mulAdd[$k] = '+';
    }
    if ($k >= $n)
      break;
  }
}

echo "Result: $tot<br />\n";
$time = round(microtime(true)-$start, 2);
echo "Time: $time sec.";

?>
