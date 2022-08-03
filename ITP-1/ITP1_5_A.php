<?php

while (list($h, $w) = explode(" ", trim(fgets(STDIN)))) {
    if ($h==0 && $w==0) {
        break;
    } elseif ($h==1 && $w==1) {
        echo '#'.PHP_EOL;
    } else {
        $w_str = '';
        for ($i=1; $i<=$w; $i++) {
            $w_str .= '#';
        }
        $h_str = $w_str;
        for ($i=1; $i<$h; $i++) {
            $h_str .= "\n".$w_str;
        }
        echo $h_str.PHP_EOL;
    }
    echo PHP_EOL;
}