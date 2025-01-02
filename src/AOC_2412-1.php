<?php

include 'Puzzle_2412.php';
$input = explode("\r\n", $s1);
$map = array ();
$strt = strlen($input[1]);
$eLine = str_repeat('e', $strt);
$map[] = "e$eLine".'e';
while ($s1 = next($input)) {
  $map[] = 'e'.$s1.'e';
}
$map[] = $map[0];

$width = strlen($input[1]);

$perV = $perH = array ();

for ($h=1; $h<=$width; $h++) {
  $areaOld = $map[0][$h];
  for ($v=1; $v<=$width+1; $v++) {
    if (($area=($map[$v][$h])) != $areaOld) {
      if ($area != 'e') {
        if (!isset($per[$area])) $per[$area] = 0;
        if (!isset($perV[$area][$h]) or !in_array($v, $perV[$area][$h])) {
          $perV[$area][$h][] = 999;
          $perV[$area][$h][] = $v;
        }
        $per[$area]++;
      }
      if ($areaOld != 'e') {
        if (!isset($per[$areaOld])) $per[$areaOld] = 0;
        if (!isset($perV[$areaOld][$h]) or !in_array(-$v+1, $perV[$areaOld][$h])) $perV[$areaOld][$h][] = -$v+1;
        $per[$areaOld]++;
      }
      $areaOld = $area;
    }
  }
}

for ($v=1; $v<=$width; $v++) {
  $areaOld = $map[$v][0];
  for ($h=1; $h<=$width+1; $h++) {
    if (($area=($map[$v][$h])) != $areaOld) {
      if ($area != 'e') {
        if (!isset($perH[$area][$v]) or !in_array($h, $perH[$area][$v])) {
          $perH[$area][$v][] = 999;
          $perH[$area][$v][] = $h;
        }
        $per[$area]++;
      }
      if ($areaOld != 'e') {
        if (!isset($perH[$areaOld][$v]) or !in_array(-$h+1, $perH[$areaOld][$v])) $perH[$areaOld][$v][] = -$h+1;
        $per[$areaOld]++;
      }
      $areaOld = $area;
    }
  }
}


$pers = $vPrev = array ();
foreach ($perV as $per=>$dum)
  $pers[] = $per;

foreach ($pers as $per) {
  foreach (array($perV,$perH) as $perA) {
    $vPrev = array ($vOld = key($perA[$per]));
    $id = 1;
    $i = 0;
    while ($perA[$per][$vOld][$i]) {
      $perA[$per][$vOld][$i] = $id++;
      $i += 3;
    }
    $hOld = $perA[$per][$vOld];
    while ($h=next($perA[$per])) {
      $v = key($perA[$per]);
      $vPrev[] = $v;
      if ($vOld+1 != $v) {
        $i = 0;
        while ($perA[$per][$v][$i]) {
          $perA[$per][$v][$i] = $id++;
          $i += 3;
        }
        $vOld = $v;
        $hOld = $perA[$per][$v];
        continue;
      }
      $i = 0;
      while ($hOld[$i]) {
        $j = 0;
        while ($h[$j]) {
          if ($hOld[$i+1] <= -$h[$j+2] and -$hOld[$i+2] >= $h[$j+1]) {
            if (($ids=$perA[$per][$v][$j]) == 999) {
              $perA[$per][$v][$j] = $hOld[$i];
            }
            else {
              foreach ($vPrev as $val) {
                $k = 0;
                while ($idn=$perA[$per][$val][$k]) {
                  if ($idn == $ids) {
                    $perA[$per][$val][$k] = $hOld[$i];
                  }
                  $k += 3;
                }
              }
            }
          }
          else if ($perA[$per][$v][$j] == 999) {
            $perA[$per][$v][$j] = $id++;
          }
          $j += 3;
        }
        $i += 3;
      }
      $vOld = $v;
      $hOld = $perA[$per][$v];
    }
    for ($i=1; $i<$id; $i++) {
      $tot1 = $tot2 = 0;
      foreach ($perA[$per] as $v) {
        $j = 0;
        while ($v[$j]) {
          if ($v[$j] == $i) {
            $tot1 += -$v[$j+2] - $v[$j+1] + 1;
            $tot2 += 2;
          }
          $j += 3;
        }
      }
      $tot += $tot1 * $tot2;
    }
  }
}


echo 'Result: ' . $tot;

?>