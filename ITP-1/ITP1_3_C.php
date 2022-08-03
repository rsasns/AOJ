<?php
while ( ! feof(STDIN) ) {
    $array = explode(" " ,trim(fgets(STDIN)));

    if ($array[0] == 0 && $array[1] == 0) break;

    sort($array);
    echo implode(" ", $array).PHP_EOL;
}