<?php

/*
 * (real) cast and is_real() function
 *
 * The (real) cast is deprecated, use (float) instead.
 * The is_real() function is also deprecated, use is_float() instead.
 *
 */

// Don't do:
$myDecimal = (real) 0.42;
is_real($myDecimal);

// Do:
$myDecimal = (float) 0.42;
is_float($myDecimal);
