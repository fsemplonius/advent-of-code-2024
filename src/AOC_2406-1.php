<?php

include 'Puzzle_2406.php';
$input = explode("\r\n", $s1);
$map = array ();
$strt = strlen($input[1]);
$eLine = str_repeat('e', $strt);
$map[] = "e$eLine".'e';
while ($s1 = next($input)) {
  $map[] = 'e'.$s1.'e';
}
$map[] = $map[0];

$dirInd = array (array(0,1), array(1,0), array(0,-1), array(-1, 0));

$v = 0;
foreach ($map as $line) {
  if ($h=strpos($line, '^'))
    break;
  $v++;
}

$dir = 3;
while ($map[$v][$h] != 'e') {
  if ($map[$v1=$v+$dirInd[$dir][0]][$h1=$h+$dirInd[$dir][1]] == '#')
    $dir = ($dir+1) % 4;
  else {
    $map[$v][$h] = 'X';
    $v = $v1; $h = $h1;
  }
}

$tot = 0;
foreach ($map as $obss) {
  $h = 1;
  while (($obs=$obss[$h++]) != 'e')
    if ($obs == 'X') $tot++;
}

echo "Result: $tot";

?>
