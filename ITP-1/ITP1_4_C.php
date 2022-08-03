<?php
while ( ! feof(STDIN) ) {
    list($a, $op, $b) = explode(" ", trim(fgets(STDIN)));

    if ($op=='?') {
        break;
    } elseif ($op=="+") {
        echo $a + $b . PHP_EOL;
    } elseif ($op=="-") {
        echo $a - $b . PHP_EOL;
    } elseif ($op=="*") {
        echo $a * $b . PHP_EOL;
    } elseif ($op =="/") {
        echo floor($a / $b) . PHP_EOL;
    }
}