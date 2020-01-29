<?php

/*
 * FILTER_SANITIZE_MAGIC_QUOTES is deprecated, use FILTER_SANITIZE_ADD_SLASHES instead.
 */

// Don't do:
$dangerousString = "my string ' OR 1=1";
filter_var($dangerousString, FILTER_SANITIZE_MAGIC_QUOTES);

// Do:
filter_var($dangerousString, FILTER_SANITIZE_ADD_SLASHES);
