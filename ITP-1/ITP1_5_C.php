<?php

while (list($h, $w) = explode(" ", trim(fgets(STDIN)))) {
    if ($h==0 && $w==0)  break;

    $str = "";
    for ($i=1; $i<=$h; $i++) {
        for ($n=1; $n<=$w; $n++) {
            if ($i%2==0) {
                $str .= $n%2==0 ? "#" : ".";
            } else {
                $str .= $n%2==0 ? "." : "#";
            }
        }
        $str .= PHP_EOL;
    }
    echo $str.PHP_EOL;
}