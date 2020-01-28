<?php

$array = ['y' => 'b', 'z' => 'c'];
return ['x' => 'a', ...$array];

// Uncaught Error: Cannot unpack array with string keys
