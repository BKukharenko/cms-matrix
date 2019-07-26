<?php

$a = [
  [1, 2, 8],
  [4, 5, 12],
];

$b = [
  [7, 5, 19],
  [3, 2, 6],
  [5, 8, 15]
];

$rows = count($a);
$columns = count($b[0]);
$c = count($b);

if (count($a[0]) != $c) {
  echo "Incompatible matrices";
  exit;
}

$result = [];

for ($i = 0; $i < $rows; $i++) {
  for ($j = 0; $j < $columns; $j++) {
    $result[$i][$j] = 0;
    for ($k = 0; $k < $c; $k++) {
      $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
    }
  }
}
print_r($result);
