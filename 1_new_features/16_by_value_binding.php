<?php

$fns = [];
foreach ([1, 2, 3] as $i) {
    $fns[] = fn() => $i;
}

foreach ($fns as $fn) {
    echo $fn() . " ";
}

// Prints: 1 2 3
// Not:    3 3 3 (would happen with by-reference)
