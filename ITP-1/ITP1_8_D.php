<?php

$s = trim(fgets(STDIN));
$p = trim(fgets(STDIN));

$s .= $s;
if (strpos($s, $p) === false) {
    echo "No".PHP_EOL;
} else {
    echo "Yes".PHP_EOL;
}
