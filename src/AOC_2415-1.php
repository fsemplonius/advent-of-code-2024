<?php

include 'Puzzle_2415.php';
$input = explode("\r\n", $s1);

$i = $cp = 0;
while ($s1=next($input)) {
  if ($cp == 0 and ($n1=strpos($s1, '@')) !== false) {
    $cp = $n1; $rp = $i;
  }
  $tiles[$i++] = str_split($s1);
}

$tiles[$rp][$cp] = '.';

$dirind = array ('>'=>array(0,1), 'v'=>array(1,0), '^'=>array(-1,0), '<'=>array(0,-1));

while ($s1=next($input)) {
  foreach (str_split($s1) as $s2) {
    list ($rd, $cd) = $dirind[$s2];
    if ($tiles[$rp+$rd][$cp+$cd] == '.') {
      $rp += $rd;
      $cp += $cd;
    }
    elseif ($tiles[$rp+$rd][$cp+$cd] == '#') {
      continue;
    }
    else {
      $cd1 = $cd * 2;
      $rd1 = $rd * 2;
      while (($st=$tiles[$rp+$rd1][$cp+$cd1]) != '#') {
        if ($st == 'O') {
          $cd1 += $cd;
          $rd1 += $rd;
        }
        else {		// .
          $tiles[$rp+$rd][$cp+$cd] = '.';
          $tiles[$rp+$rd1][$cp+$cd1] = 'O';
          $rp += $rd;
          $cp += $cd;
          break;
        }
      }
    }
  }
}


$rp1 = 0;
foreach($tiles as $rows) {
  $cp1 = 0;
  foreach($rows as $pos) {
/*    if ($cp == $cp1 and $rp == $rp1)
      echo '@';
    else
      echo $pos;	*/
    if ($pos == 'O')
      $tot += 100*$rp1 + $cp1;
    $cp1++;
  }
  $rp1++;
//  echo "\n";
}    

echo 'Result: ' . $tot;

?>