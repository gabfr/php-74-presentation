<?php

$values = [1, 2, 3];
$allowedValues = [2];

array_filter(
    $values,
    $v => in_array($v, $allowedValues) // ECMAScript Syntax
);
