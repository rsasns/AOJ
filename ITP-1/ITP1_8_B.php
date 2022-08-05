<?php
while($input = trim(fgets(STDIN))) {
    $nums = array_map("intval", str_split($input));
    $sum = array_sum($nums);
    if ($sum === 0) {
        break;
    } else {
        echo $sum.PHP_EOL;
    }
};