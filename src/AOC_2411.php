<?php

// Make this boolean true to run part 2

$s1 = '125 17';
$s1 = '890 0 1 935698 68001 3441397 7221 27';
$numBlinks = 75;
$stones = array ();
$stnum = array (0);

foreach (explode(' ', $s1) as $stone) {
  $stones[] = (int)$stone;
  $stnum[] = 1;
}

for ($i=0; $i<$numBlinks; $i++) {		// number of blinks
  $newStones = array ();
  $newStnum = array (0);
  foreach ($stones as $stone) {
    $stone1 = $stone;
    $num1 = next($stnum);
    if ($stone1 == 0) {
      if (($ip=array_search(1, $newStones)) === false) {
        $newStones[] = 1;
        $newStnum[] = $num1;
      }
      else
        $newStnum[$ip+1] += $num1;
    }
    elseif (($l=strlen($str=strval($stone1))) % 2 == 0) {
      $stone1 = (int)substr($str, 0, $k=$l/2);
      if (($ip=array_search($stone1, $newStones)) === false) {
        $newStones[] = $stone1;
        $newStnum[] = $num1;
      }
      else
        $newStnum[$ip+1] += $num1;
      $stone1 = (int)substr($str, $k, $k);
      if (($ip=array_search($stone1, $newStones)) === false) {
        $newStones[] = $stone1;
        $newStnum[] = $num1;
      }
      else
        $newStnum[$ip+1] += $num1;
    }
    else {
      $stone1 = 2024 * $stone1;
      if (($ip=array_search($stone1, $newStones)) === false) {
        $newStones[] = $stone1;
        $newStnum[] = $num1;
      }
      else
        $newStnum[$ip+1] += $num1;
    }
  }
  $stones = $newStones;
  $stnum = $newStnum;
}

$tot = array_sum($stnum);
echo "Result: " . $tot;

?>
