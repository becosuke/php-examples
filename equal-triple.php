<?php

$is = range(0, 10000);
$js = range(0, 3000);

$time1 = microtime(true);
foreach ($is as $i) {
    foreach ($js as $j) {
        if (true === true) {
            $tmp = 1;
        } else {
            $tmp = 1;
        }
    }
}
$time2 = microtime(true);
print('if-else then :' . ($time2 - $time1) . PHP_EOL);

$time1 = microtime(true);
foreach ($is as $i) {
    foreach ($js as $j) {
        if (true !== true) {
            $tmp = 1;
        } else {
            $tmp = 1;
        }
    }
}
$time2 = microtime(true);
print('if-else else :' . ($time2 - $time1) . PHP_EOL);

$time1 = microtime(true);
foreach ($is as $i) {
    foreach ($js as $j) {
        $tmp = 1;
        if (true === true) {
            $tmp = 1;
        }
    }
}
$time2 = microtime(true);
print('init-if then :' . ($time2 - $time1) . PHP_EOL);

$time1 = microtime(true);
foreach ($is as $i) {
    foreach ($js as $j) {
        $tmp = 1;
        if (true !== true) {
            $tmp = 1;
        }
    }
}
$time2 = microtime(true);
print('init-if else :' . ($time2 - $time1) . PHP_EOL);
