<?php
$h = fopen(__DIR__ . '/input.txt', 'r');

$lft = [];
$rgt = [];
while ($line = fgets($h)) {
    preg_match('/^(\d+)\s+(\d+)$/', $line, $m);
    $lft[] = intval($m[1]);
    $rgt[] = intval($m[2]);
}
fclose($h);

asort($lft);
asort($rgt);

$lft = array_values($lft);
$rgt = array_values($rgt);

$out = 0;

for ($i = 0; $i < count($lft); $i++) {
    $out += abs($lft[$i] - $rgt[$i]);
}

echo $out;
echo PHP_EOL;

// 1319616
