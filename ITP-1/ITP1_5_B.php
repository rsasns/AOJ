<?php

while (list($h, $w) = explode(" ", trim(fgets(STDIN)))) {
    if ($h==0 && $w==0)  break;

    $str = "";
    for ($i=1; $i<=$h; $i++) {
        if ($i==1 || $i==$h) {
            $str .= str_repeat("#", $w)."\n";
        } else {
            $str .= "#".str_repeat(".", $w-2)."#\n";
        }
    }
    echo $str.PHP_EOL;
}