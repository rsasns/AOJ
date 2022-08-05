<?php

while(list($m, $f, $r) = array_map("intval", explode(" ", trim(fgets(STDIN))))) {
	if ($m == -1 && $f == -1 && $r == -1) {
		break;
	}
	
	if ($m == -1 || $f == -1) {
		echo 'F'.PHP_EOL;
		continue;
	}
	
	if (80 <= $m + $f) {
		echo 'A'.PHP_EOL;
		continue;
	}
	
	if (65 <= $m + $f) {
		echo 'B'.PHP_EOL;
		continue;
	}
	
	if (50 <= $m + $f) {
		echo 'C'.PHP_EOL;
		continue;
	}
	
	if (30 <= $m + $f) {
		if (50 <= $r) {
			echo 'C'.PHP_EOL;
			continue;
		} else {
			echo 'D'.PHP_EOL;
			continue;
		}
	}
	
	echo 'F' .PHP_EOL;
	continue;
};