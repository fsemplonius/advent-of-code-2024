<?php

$start = microtime(true);
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
$path = array ();
while ($map[$v][$h] != 'e') {
  if ($map[$v1=$v+$dirInd[$dir][0]][$h1=$h+$dirInd[$dir][1]] == '#')
    $dir = ($dir+1) % 4;
  else {
    $v = $v1; $h = $h1;
    if (!in_array(array($v,$h,0),$path) and !in_array(array($v,$h,1),$path) and 
        !in_array(array($v,$h,2),$path) and !in_array(array($v,$h,3),$path)) $path[] = array($v,$h,$dir);
  }
}

$tot = 0;
$i = 1;
while ($spot=$path[$i++]) {
  $map[$spot[0]][$spot[1]] = '#';
  $newPath = array ();
  list ($v, $h, $dir) = $path[$i-2];
  while ($map[$v][$h] != 'e' and !($f=in_array(array($v,$h,$dir), $newPath))) {
    if ($map[$v1=$v+$dirInd[$dir][0]][$h1=$h+$dirInd[$dir][1]] == '#') {
      $newPath[] = array ($v, $h, $dir);
      $dir = ($dir+1) % 4;
    }
    else {
      $v = $v1; $h = $h1;
    }
  }
  if ($f) $tot++;
  $map[$spot[0]][$spot[1]] = '.';
}

echo "Result: $tot<br />\n";
$time = round(microtime(true)-$start, 2);
echo "Time: $time sec.";

?>
