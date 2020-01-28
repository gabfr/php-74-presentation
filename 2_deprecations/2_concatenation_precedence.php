<?php

$a = 1;
$b = 2;

echo "Sum: " . $a + $b; // Deprecated in PHP 7.4

// Was intended as:
echo "Sum: " . ($a + $b); // New behavior in PHP 8.0

// But PHP interprets it as:
echo ("Sum: " . $a) + $b;
