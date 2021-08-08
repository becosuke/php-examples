<?php

if (empty($argv[1])) {
    $num = 0;
} else {
    $num = $argv[1];
}

function stairs($num) {
    if ($num < 0) {
        return 0;
    } elseif ($num == 0) {
        return 1;
    } else {
        return stairs($num - 1) + stairs($num - 2);
    }
}

print($num . PHP_EOL);
print(stairs($num) . PHP_EOL);
