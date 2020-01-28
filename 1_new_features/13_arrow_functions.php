<?php

$values = [1, 2, 3];
$allowedValues = [2];

array_filter(
    $values,
    function ($v) use ($allowedValues) {
        return in_array($v, $allowedValues);
    }
);
