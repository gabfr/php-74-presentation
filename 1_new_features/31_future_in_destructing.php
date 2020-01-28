<?php

$array = [1, 2, 3, 4];
[$head, ...$tail] = $array;

// Or either:

$array = [2 => 2, 1 => 1, 0 => 0];
[$head, ...$tail] = $array;

// What happens? Not exactly very clear for this feature in the end yet
