<?php
list($r, $c) = array_map("intval", explode(" ", trim(fgets(STDIN))));

$h = array_fill(0, $c+1, 0);
for ($i=0; $i<$r; $i++) {
	$c_nums = array_map("intval", explode(" ", trim(fgets(STDIN))));
	array_push($c_nums, array_sum($c_nums));
	for ($j=0; $j<=$c; $j++) {
		$h[$j] += $c_nums[$j];
	}
	echo implode(" ", $c_nums).PHP_EOL;
}
echo implode(" ", $h).PHP_EOL;