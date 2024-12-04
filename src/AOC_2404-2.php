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
$poss = array (array(1,1), array(-1,1), array(-1,-1), array(1,-1));

for ($h=2; $h<$strt; $h++) {
  for ($v=2; $v<$strt; $v++) {
    if ($maze[$v][$h] != 'A') continue;
    $n = 0;
    $digs = array ();
    $found = true;
    foreach ($poss as $pos) {
      if (!in_array($s2=$maze[$v+$pos[0]][$h+$pos[1]], array('M','S'))) {
        $found = false;
        break;
      }
      $digs[] = $s2;
      if ($s2 == 'M') $n++;
    }
    if ($found and $n == 2 and ($digs[0] == $digs[1] or $digs[1] == $digs[2] or 
                                $digs[2] == $digs[3] or $digs[3] == $digs[0]))
      $tot++;
  }
}

echo "Result: " . $tot;

?>
