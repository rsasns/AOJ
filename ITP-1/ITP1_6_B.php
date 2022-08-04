<?php

$cards = card([]);

$has_total = fgets(STDIN);
while($card = trim(fgets(STDIN))) {
    unset($cards[array_search($card, $cards)]);
};
echo empty($cards) ? '' : implode("\n", $cards).PHP_EOL;

function card(array $card): array
{
    for ($i=1; $i<=13; $i++) {
        array_push($card, 'S '.$i);
    }
    for ($i=1; $i<=13; $i++) {
        array_push($card, 'H '.$i);
    }
    for ($i=1; $i<=13; $i++) {
        array_push($card, 'C '.$i);
    }
    for ($i=1; $i<=13; $i++) {
        array_push($card, 'D '.$i);
    }
    return $card;
}