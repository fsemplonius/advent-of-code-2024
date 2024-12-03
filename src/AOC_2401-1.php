<?php

//
//
include 'Puzzle_2401.php';
$input = explode("\r\n", $s1);
$arr1 = array();
$arr2 = array();

while ($s1=next($input)) {
  list ($s1, $s2) = explode('   ', $s1);
  $arr1[] = $s1;
  $arr2[] = $s2;
}
sort($arr1);
sort($arr2);
$tot = 0;
for ($i=0; $i<count($arr1); $i++)
  $tot += abs($arr2[$i] - $arr1[$i]);

echo "Result: $tot";

?>
