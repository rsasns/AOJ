<?php
list($n, $m, $l) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$a = [];
for ($i=0; $i<$n; $i++) {
	$a_line = array_map("intval", explode(" ", trim(fgets(STDIN))));
	$a[$i] = $a_line;
}

$b = [];
for ($j=0; $j<$m; $j++) {
	$b_line = array_map("intval", explode(" ", trim(fgets(STDIN))));
	$b[$j] = $b_line;
}

$c = [];
for ($k=0; $k<$n; $k++) {
	$c[$k] = array_fill(0, $l, 0);
}

foreach ($a as $i => $a_nums) {
    foreach ($b as $j => $b_nums) {
        foreach ($b_nums as $k => $n) {
            $c[$i][$k] += $n * $a_nums[$j];
        }
    }
    echo implode(' ', $c[$i]), PHP_EOL;
}