<?php

if (empty($argv[1])) {
    $num = 0;
} else {
    $num = $argv[1];
}

function stairs($num) {
    return floor(pow((1 + sqrt(5)) / 2, ($num + 1)) / sqrt(5) + 1 / 2);
}

print($num . PHP_EOL);
print(stairs($num) . PHP_EOL);
