<?php

include 'Puzzle_2404.php';
$input = explode("\r\n", $s1);
$maze = $stack = $allLoc = array ();
$strt = strlen($input[1]);
$eLine = str_repeat('#', $strt);
$maze[] = "#$eLine".'#';
while ($s1 = next($input)) {
  $maze[] = '#'.$s1.'#';
}
$maze[] = $maze[0];

$tot = 0;
$xmas = 'XMAS';
$dirs = array (array(0,1), array(1,1), array(1,0), array(0,-1), array(-1,-1), array(-1,0), array(-1,1), array(1,-1));

for ($h=1; $h<$strt+1; $h++) {
  for ($v=1; $v<$strt+1; $v++) {
    foreach ($dirs as $dir) {
      list ($vd, $hd) = $dir;
      $vp = $v; $hp = $h;
      $found = true;
      for ($l=0; $l<strlen($xmas); $l++) {
        if (($s2=$maze[$vp][$hp]) != $xmas[$l] or $s2 == '#') {
          $found = false;
          break;
        }
        $vp += $vd; $hp += $hd;
      }
      if ($found) $tot++;
    }
  }
}

echo "Result: " . $tot;

?>
