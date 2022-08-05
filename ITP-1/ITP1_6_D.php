<?php
list($n, $m) = explode(" ", trim(fgets(STDIN)));

$a = [];
for ($i = 0; $i < $n; $i++) {
	$a[] = explode(" ", trim(fgets(STDIN)));
}

$b = [];
for ($i = 0; $i < $m; $i++) {
	$b[] = explode(" ", trim(fgets(STDIN)));
}

$c = [];
for ($i = 0; $i < $n; $i++) {
	$sum = 0;
	for ($j = 0; $j < $m; $j++) {
		$sum += $a[$i][$j] * $b[$j][0];
	}
	$c[] = $sum;
}

foreach ($c as $row) {
	echo $row . PHP_EOL;
}