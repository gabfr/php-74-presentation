<?php

$values = [1, 2, 3];
$allowedValues = [2];

array_filter(
    $values,
    fn ($v) => in_array($v, $allowedValues)
);

// In the future we'll have block syntax also:
array_filter(
    $values,
    fn ($v) {
        // More code...
        return in_array($v, $allowedValues);
    }
);

// Basically like normal closure syntax,
// but with implicit variable capture (the famous `use` statement)
