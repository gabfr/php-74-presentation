<?php

/*
 * Importing type libraries with case-insensitive constant registering has been deprecated.
 */

// Don't do:
define('FOO', 42, true); // Deprecated: define(): Declaration of case-insensitive constants is deprecated
var_dump(FOO); // Ok!
var_dump(foo); // Deprecated: Case-insensitive constants are deprecated. The correct casing for this constant is "FOO"

// Do:
define('FOO', 42);
var_dump(FOO); // Ok!
var_dump(foo); // Will throw an error of undefined constant
