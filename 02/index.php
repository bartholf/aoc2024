<?php
$h = fopen(__DIR__ . '/input.txt', 'r');

function isSafe(array $v): bool
{
    for($i = 0; $i < count($v) - 1; $i++) {

    }
}

$data = [];
while ($line = fgets($h)) {
    if ($v = array_filter(preg_split('/\s/', $line))) {
        $data[] = $v;
    }
}

print_r($data);
// 1319616
