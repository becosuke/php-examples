<?php

if (empty($argv[1])) {
    $num = 0;
} else {
    $num = $argv[1];
}

$memo = [];
function stairs($num) {
    global $memo;
    if ($num < 0) {
        return 0;
    } elseif ($num == 0) {
        return 1;
    } elseif (isset($memo[$num])) {
        return $memo[$num];
    } else {
        $memo[$num] = stairs($num - 1) + stairs($num - 2) + stairs($num - 3);
        return $memo[$num];
    }
}

print($num . PHP_EOL);
print(stairs($num) . PHP_EOL);
