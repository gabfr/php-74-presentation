<?php

// Looks like: Assignment expression
($x = [42] + ["foobar"]) => $x;

// Looks like: Constant lookup + bitwise and
(Type &$x) => $x;

// Looks like: Ternary operator
$a ? ($b): Type => $c : $d;

// Need special handling starting at (
// But only know it's an arrow function at =>
