<?php

$values = [1, 2, 3];
$allowedValues = [2];

array_filter(
    $values,
    fn ($v) => in_array($v, $allowedValues)
);

// Note: implicit use statement for `$allowedValues`
