<?php

/*
 * restore_include_path() function
 *
 * The restore_include_path() function is deprecated.
 * It can be replaced by ini_restore('include_path').
 */

// Don't do:
restore_include_path();

// Do:
ini_restore('include_path');
