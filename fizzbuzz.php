<?php

if (empty($argv[1])) {
    $num = 0;
} else {
    $num = $argv[1];
}

function fizzbuzz($num) {
    if ($num % 15 == 0) {
        return "Fizz Buzz";
    } elseif ($num % 3 == 0) {
        return "Fizz";
    } elseif ($num % 5 == 0) {
        return "Buzz";
    } else {
        return $num;
    }
}

print($num . PHP_EOL);
print(implode(',', array_map('fizzbuzz', range(1, $num))) . PHP_EOL);
#for ($i = 1; $i <= $num; $i++) {
#    print(fizzbuzz($i) . PHP_EOL);
#}
