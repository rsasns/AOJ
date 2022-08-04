<?php

$input = trim(fgets(STDIN));
call($input);

function call($n): void
{
    for ($i=1; $i<=$n; $i++) {
        if ($i%3 == 0) {
            echo " ".$i;
        } else {
            $j = $i;
            while ($j != 0) {
                if ($j % 10 == 3) {
                    print " ".$i;
                    break;
                }
                $j /= 10;
            }
    
        }
    }
    echo PHP_EOL;
}