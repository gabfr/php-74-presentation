<?php

/*
 * Array and string offset access using curly braces
 *
 * The array and string offset access syntax using curly braces is deprecated.
 * Use $var[$idx] instead of $var{$idx}.
 */

$arr = [1];

// Don't do:
$myVal = $arr{0};

// Do:
$myVal = $arr[0];
