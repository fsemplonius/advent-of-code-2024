<?php

include 'Puzzle_2417.php';
$input = explode("\r\n", $s1);

$regA = explode(': ', next($input))[1];
$regB = explode(': ', next($input))[1];
$regC = explode(': ', next($input))[1];
next($input);
$instrs = explode(',', explode(': ', next($input))[1]);

function combo($cmb, $regA, $regB, $regC) {
  switch ($cmb) {
  case 0:
  case 1:
  case 2:
  case 3:
    return $cmb;
  case 4:
    return $regA;
  case 5:
    return $regB;
  case 6:
    return $regC;
  }
}

$sep = '';
$pc = 0;
while (isset($instrs[$pc++])) {
  switch ($instrs[$pc-1]) {
  case 0:
    $regA = (int)($regA / pow(2, combo($instrs[$pc++],$regA,$regB,$regC)));
    break;
  case 1:
    $regB = (int) $regB ^ (int) $instrs[$pc++];
    break;
  case 2:
    $regB = combo($instrs[$pc++],$regA,$regB,$regC) % 8;
    break;
  case 3:
    if ($regA == 0)
      $pc += 2;
    else
      $pc = $instrs[$pc];
    break;
  case 4:
    $regB = (int) $regB ^ (int) $regC;
    $pc++;
    break;
  case 5:
    $tot .= $sep.(combo($instrs[$pc++],$regA,$regB,$regC) % 8);
    $sep = ',';
    break;
  case 6:
    $regB = (int)($regA / pow(2, combo($instrs[$pc++],$regA,$regB,$regC)));
    break;
  case 7:
    $regC = (int)($regA / pow(2, combo($instrs[$pc++],$regA,$regB,$regC)));
    break;
  }
}

echo 'Result: ' . $tot;

?>