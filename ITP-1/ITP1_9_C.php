<?php
$taro_points = 0;
$hanako_points = 0;

$n = intval(trim(fgets(STDIN)));
for ($i=0; $i<$n; $i++) {
    list($taro, $hanako) = explode(" ", trim(fgets(STDIN)));
    $ret = strnatcmp($taro, $hanako);
    if ($ret < 0) {
        $hanako_points += 3;
    } elseif ($ret == 0) {
        $taro_points++;
        $hanako_points++;
    } else {
        $taro_points += 3;
    }
}

echo $taro_points." ".$hanako_points.PHP_EOL;