<?php

if (empty($argv[1])) {
    $num = 0;
} else {
    $num = $argv[1];
}

function stairs($num, $a = 1, $b = 1, $c = 2) {
    if ($num < 0) {
        return 0;
    } elseif ($num == 0) {
        return $a;
    } else {
        return stairs($num - 1, $b, $c, $a + $b + $c);
    }
}

print($num . PHP_EOL);
print(stairs($num) . PHP_EOL);
