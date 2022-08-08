<?php
while(true){
    $cards = trim(fgets(STDIN));
    if (substr($cards, 0) == "-") break;
    $shuffle_cnt = intval(trim(fgets(STDIN)));

    for ($i=0; $i<$shuffle_cnt; $i++) {
        $h = intval(trim(fgets(STDIN)));
        $last = str_split($cards, $h);
        $start = substr($cards, $h);
        $cards = $start.$last[0];
    }

    echo $cards.PHP_EOL;
}