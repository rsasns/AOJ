<?php

$ret = array_combine(range('a', 'z'), array_fill(0, 26, 0));

while($list = trim(fgets(STDIN))) {
    $array = str_split($list);
    for ($i=0; $i<count($array); $i++) {
        foreach (range('a', 'z') as $abc) {
            if (ctype_upper($array[$i])) {
                $array[$i] = strtolower($array[$i]);
            }
            if ($array[$i] == $abc) {
                $ret[$abc] += 1;
            }
        }
    }
};

foreach ($ret as $abc => $cnt) {
    echo $abc." : ".$cnt.PHP_EOL;
}