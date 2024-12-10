<?php

$start = microtime(true);

include 'Puzzle_2409.php';
$s1 .= 'e';
$fileSpace = array ();
$i = $id = 0;
$flip = true;
while ($s1[$i] != 'e') {
  if ($flip) {
    $fileSpace[] = array($id++, $s1[$i++]);
  }
  else
    $fileSpace[] = $s1[$i++];
  $flip = !$flip;
}

$fillUp = array ();
$nfree = 0;
list ($id, $nfile) = array_pop($fileSpace);
$ip = -1;
while (($cnt=count($fileSpace)) > $ip) {
  $n = min($nfile,$nfree);
  for ($i=0; $i<$n; $i++) {
    $fillUp[] = $id;
    $nfile--; $nfree--;
  }
  if ($nfile <= 0 or $ip+1 > $cnt) {
    array_pop($fileSpace);
    list ($id, $nfile) = array_pop($fileSpace);
  }
  if ($nfree <= 0 or $ip+1 >= $cnt) {
    if ($fillUp) {
      $fileSpace[$ip] = $fillUp;
      $fillUp = array ();
    }
    $ip += 2;
    $nfree = $fileSpace[$ip];
  }
}
if ($nfile > 0) $fileSpace[] = array($id, $nfile);

$tot = 0;
$pos = 0;
$s1 = $fileSpace[0];
do {
  for ($i=0; $i<$s1[1]; $i++) {
    $tot += $pos++ * $s1[0];
  }
  $s1 = next($fileSpace);
  if (!isset($s1)) break;
  if ($s1 != 0)
    foreach ($s1 as $s2)
      $tot += $pos++ * $s2;
} while ($s1=next($fileSpace));

echo "Result: $tot<br />\n";
$time = round(microtime(true)-$start, 2);
echo "Time: $time sec.";

?>
