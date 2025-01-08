<?php

include 'Puzzle_2415.php';
$input = explode("\r\n", $s1);

$i = $cp = 0;
while ($s1=next($input)) {
  $j = 0;
  foreach (str_split($s1) as $s2) {
    switch ($s2) {
    case '#':
      $x1 = '#';
      $x2 = '#';
      break;
    case '.':
      $x1 = '.';
      $x2 = '.';
      break;
    case 'O':
      $x1 = '[';
      $x2 = ']';
      break;
    case '@':
      $x1 = '.';
      $x2 = '.';
      $rp = $i;
      $cp = $j;
    }
    $tiles[$i][$j++] = $x1;
    $tiles[$i][$j++] = $x2;
  }
  $i++;
}

$dirind = array ('>'=>array(0,1), 'v'=>array(1,0), '^'=>array(-1,0), '<'=>array(0,-1));
$stack = array ();

while ($s1=next($input)) {
  foreach (str_split($s1) as $s2) {
    list ($rd, $cd) = $dirind[$s2];
    if ($cd == 0) {				// move up / down ?
      if ($tiles[$rp+$rd][$cp] == '.')		// yes
        $rp += $rd;
      elseif ($tiles[$rp+$rd][$cp] == '#')
        continue;
      else {
        $sp = -1;
        $sts = array ();
        $stack[++$sp] = array ($rp+$rd, $cp);
        while ($sp >= 0) {
          list ($rp1, $cp1) = $stack[$sp--];
          if ($tiles[$rp1][$cp1] == ']') $cp1--;
          if ($tiles[$rp1+$rd][$cp1] == '#' or $tiles[$rp1+$rd][$cp1+1] == '#') {
            $sts = array ();
            break;
          }
          $sts[] = array ($rp1, $cp1);
          if ($tiles[$rp1+$rd][$cp1] == '[')
            $stack[++$sp] = array ($rp1+$rd, $cp1);
          else {
            if ($tiles[$rp1+$rd][$cp1] == ']')
              $stack[++$sp] = array ($rp1+$rd, $cp1-1);
            if ($tiles[$rp1+$rd][$cp1+1] == '[')
              $stack[++$sp] = array ($rp1+$rd, $cp1+1);
          }
        }
        foreach ($sts as $st) {
          list ($rp1, $cp1) = $st;
          $tiles[$rp1][$cp1] = '.';
          $tiles[$rp1][$cp1+1] = '.';
        }
        foreach ($sts as $st) {
          list ($rp1, $cp1) = $st;
          $tiles[$rp1+$rd][$cp1] = '[';
          $tiles[$rp1+$rd][$cp1+1] = ']';
        }
        if ($sts) $rp += $rd;
      }
    }
    else {					// move left right?
      if ($tiles[$rp][$cp+$cd] == '.')		// yes
        $cp += $cd;
      elseif ($tiles[$rp][$cp+$cd] == '#')
        continue;
      else {
        $cd1 = $cd * 3;
        while (($st=$tiles[$rp][$cp+$cd1]) != '#') {
          if (in_array($st, array('[',']'))) {
            $cd1 += $cd * 2;
          }
          else {				// .
            $tiles[$rp][$cp+$cd] = '.';
            if ($cd > 0) {
              $ist = $cp+2;
              $ien = $cp+$cd1+1;
            }
            else {
              $ist = $cp+$cd1;
              $ien = $cp-1;
            }
            $ch = '[';
            for ($i=$ist; $i<$ien; $i++) {
              $tiles[$rp][$i] = $ch;
              $ch = $ch=='[' ? ']': '[';
            }
            $cp += $cd;
            break;
          }
        }
      }
    }
  }
}

$tot = 0;
//echo "\n";
$rp1 = 0;
foreach($tiles as $rows) {
  $cp1 = 0;
  foreach($rows as $pos) {
/*    if ($cp == $cp1 and $rp == $rp1)
      echo '@';
    else
      echo $pos; */
    if ($pos == '[') {
      $tot += 100*$rp1 + $cp1;
    }
    $cp1++;
  }
  $rp1++;
//  echo "\n";
}    

echo "Result: " . $tot;

?>