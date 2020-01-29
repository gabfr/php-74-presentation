<?php

/*
 * hebrevc() function
 *
 * The hebrevc() function is deprecated.
 * It can be replaced with nl2br(hebrev($str)) or, preferably, the use of Unicode RTL support.
 */

// Don't do:
hebrevc("á çùåï äúùñâ\ná çùåï äúùñâ");

// Do:
nl2br(hebrev("á çùåï äúùñâ\ná çùåï äúùñâ"));
