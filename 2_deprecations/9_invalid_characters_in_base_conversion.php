<?php

/*
 * Invalid characters in base conversion functions
 *
 * Passing invalid characters to base_convert(), bindec(), octdec() and hexdec() will now generate a deprecation notice.
 * The result will still be computed as if the invalid characters did not exist. Leading and trailing whitespace,
 * as well as prefixes of type 0x (depending on base) continue to be allowed.
 *
 */
