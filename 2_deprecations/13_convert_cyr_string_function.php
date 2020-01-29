<?php

/*
 * convert_cyr_string() function
 *
 * The convert_cyr_string() function is deprecated.
 * It can be replaced by one of mb_convert_string(), iconv() or UConverter.
 */

// Don't do:
$s = "Welcome! æøå";
convert_cyr_string($s,'w','a');

// Do:
mb_convert_encoding($s, "UCS-2LE", "JIS, eucjp-win, sjis-win");

