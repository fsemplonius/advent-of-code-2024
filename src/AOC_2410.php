<?php

// Make this boolean true to run part 2
$part2 = false;

include 'Puzzle_2410.php';
$input = explode("\r\n", $s1);
$map = array ();
$strt = strlen($input[1]);
$eLine = str_repeat('#', $strt);
$map[] = "#$eLine".'#';
while ($s1 = next($input)) {
  $map[] = '#'.$s1.'#';
}
$map[] = $map[0];

$dirs = array(array(-1,0), array(0,1), array(1,0), array(0,-1));

for ($v=1; $v<=$strt; $v++) {
  for ($h=1; $h<=$strt; $h++) {
    $tot1 = 0;
    if ($map[$v][$h] != '0') continue;
    $trails = array ();
    $stepStart = $ipTrail = $step = 0;
    $trails[$fr=$ipTrail++] = array($step, $v, $h);
    for ($step=1; $step<=9; $step++) {
      $fr = $stepStart-1;
      $stepStart = $ipTrail;
      while (true) {
        list ($step1, $v1, $h1) = $trails[++$fr];
        if ($step1 != $step-1) break;
        foreach ($dirs as $dir) {
          if (($s2=$map[$v2=$v1+$dir[0]][$h2=$h1+$dir[1]]) == $step and
              $s2 != '#' and ($part2 or !in_array(array($step,$v2,$h2), $trails))) {
            $trails[$ipTrail] = array($step, $v2, $h2);
            $trails[$fr][3][] = $ipTrail;
            $ipTrail++;
            if ($step == 9) $tot1++;
          }
        }
      }
    }
    $tot += $tot1;
  }
}

echo "Result: " . $tot;

?>
