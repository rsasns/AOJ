<?php
while ( ! feof(STDIN) ) {
    $x = trim(fgets(STDIN));
    if ($x == 0) continue;
    echo 'Case '.$i.': '.$x.PHP_EOL;
    $i++;
}