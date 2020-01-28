<?php

// We can emulate this behavior by creating a function that always work by reference through mocking an anonymous class
// property. Downside: we have to keep the reference in memory so it doesnt gets destroyed
function &int(int $i) {
    $obj = new class { public int $prop; };
    $obj->prop = $i;
    $GLOBALS['huge_memory_leak'][] = $obj;
    return $obj->prop;
}

$i =& int(0);
$i = "foobar"; // Should throw an error:
// Uncaught TypeError: Cannot assign string to reference held by property class@anonymous::$prop of type int
