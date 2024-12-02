<?php

//
// Based on shoelace formula
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
$arr2 = array_count_values($arr2);
//print_r($arr1);
//print_r($arr2);
$tot = 0;
for ($i=0; $i<count($arr1); $i++) {
  $tot += ($s2=$arr1[$i]) * $arr2[$s2];
  //echo "$tot ";
}

echo "Result: $tot";

?>
