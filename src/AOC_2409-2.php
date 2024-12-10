<?php

// This took about 12 sec. running on Odroid M1 Ubuntu server 20.04/PHP7.4

$start = microtime(true);

include 'Puzzle_2409.php';
$s1 .= 'e';
$fileSpace = array ();
$i = $id = 0;
$flip = true;
while ($s1[$i] != 'e') {
  if ($flip)
    $fileSpace[] = array($id++, $s1[$i++]);
  else
    $fileSpace[] = array($s1[$i++]);
  $flip = !$flip;
}

$ipfile = count($fileSpace) + 1;
while(($ipfile-=2) > 0) {
  for ($i=1; $i<$ipfile; $i+=2) {
    if ($fileSpace[$i][0] >= $fileSpace[$ipfile][1]) {
      $fileSpace[$i][0] -= $fileSpace[$ipfile][1];
      $fileSpace[$i][] = $fileSpace[$ipfile];
      $fileSpace[$ipfile][0] = 0;
      break;
    }
  }
}

$tot = 0;
$pos = 0;
$j = -1;
$cnt = count($fileSpace);
while (++$j < $cnt) {
  $s1 = $fileSpace[$j];
  for ($i=0; $i<$s1[1]; $i++)
    $tot += $pos++ * $s1[0];
  if (++$j >= $cnt) break;
  $s1 = $fileSpace[$j];
  while ($s2=next($s1))
    for ($i=0; $i<$s2[1]; $i++)
      $tot += $pos++ * $s2[0];
  $pos += $s1[0];
}

echo "Result: $tot<br />\n";
$time = round(microtime(true)-$start, 2);
echo "Time: $time sec.";

?>
