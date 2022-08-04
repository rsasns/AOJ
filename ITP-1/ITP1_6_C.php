<?php

$build = [
    1 => [
        3 => array_fill(1, 10, 0),
        2 => array_fill(1, 10, 0),
        1 => array_fill(1, 10, 0),
    ],
    2 => [
        3 => array_fill(1, 10, 0),
        2 => array_fill(1, 10, 0),
        1 => array_fill(1, 10, 0),
    ],
    3 => [
        3 => array_fill(1, 10, 0),
        2 => array_fill(1, 10, 0),
        1 => array_fill(1, 10, 0),
    ],
    4 => [
        3 => array_fill(1, 10, 0),
        2 => array_fill(1, 10, 0),
        1 => array_fill(1, 10, 0),
    ],
];

$n = trim(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    list($b, $f, $r, $v) = array_map("intval", explode(' ', trim(fgets(STDIN))));
    $build[$b][$f][$r] += $v;
}

for ($i=1; $i<=4; $i++) {
    for ($j=1; $j<=3; $j++) {
        echo " ".implode(" ", $build[$i][$j]).PHP_EOL;
    }
    if ($i<4) echo str_repeat("#", 20).PHP_EOL;
}