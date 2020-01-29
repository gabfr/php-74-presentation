<?php

/*
 * Multibyte String
 *
 * Passing a non-string pattern to mb_ereg_replace() is deprecated.
 * Currently, non-string patterns are interpreted as ASCII codepoints.
 * In PHP 8, the pattern will be interpreted as a string instead.
 *
 * Passing the encoding as 3rd parameter to mb_strrpos() is deprecated.
 * Instead pass a 0 offset, and encoding as 4th parameter.
 */
