<?php

/*
 * Implode with historical parameter order
 *
 * Passing parameters to implode() in reverse order is deprecated,
 * use implode($glue, $parts) instead of implode($parts, $glue).
 */

// Don't do:
$arr = [1,2,3];
implode($arr, '|');

// Do:
implode('|', $arr);
