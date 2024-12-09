<?php

$start = microtime(true);

include 'Puzzle_2408.php';
$input = explode("\r\n", $s1);
$city = array ();
$nCity = strlen($input[1]);
while ($s1=next($input))
  $city[] = $s1;

$ants = array ();
for ($v=0; $v<$nCity; $v++)
  for ($h=0; $h<$nCity; $h++) 
    if (($ant=$city[$v][$h]) != '.')
      $ants[$ant][] = array($v, $h);

foreach ($ants as $ant) {
  $i = 0;
  while ($ant[$i+1]) {
    $pos1 = $ant[$i++];
    $pos2 = $ant[$j=$i];
    do {
      list ($v1, $h1) = $pos1;
      list ($v2, $h2) = $pos2;
      $dv = abs($v1 - $v2);
      $dh = abs($h1 - $h2);
      $v3 = min($v1, $v2) - $dv;
      $v4 = max($v1, $v2) + $dv;
      $h3 = max($h1, $h2) + $dh;
      $h4 = min($h1, $h2) - $dh;
      if ($h1 < $h2) {
        $s1=$h3; $h3=$h4; $h4=$s1;
      }
      if (min($v3,$h3) >= 0 and max($v3,$h3) < $nCity) $city[$v3][$h3] = '#';
      if (min($v4,$h4) >= 0 and max($v4,$h4) < $nCity) $city[$v4][$h4] = '#';
    } while ($pos2=$ant[++$j]);
  }
}

$tot = 0;
foreach ($city as $pos) {
  $h = -1;
  while ($h++ < $nCity)
    if ($pos[$h] == '#') $tot++;
}

echo "Result: $tot<br />\n";
$time = round(microtime(true)-$start, 2);
echo "Time: $time sec.";

?>
