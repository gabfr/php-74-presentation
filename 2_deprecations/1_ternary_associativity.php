<?php

return $a == 1 ? 'one'         // Deprecated in PHP 7.4.
     : $a == 1 ? 'two'         // Compile error in 8.0.
               : 'other';

// was intended as:
return $a == 1 ? 'one'
     : ($a == 2 ? 'two'
                : 'other');

// but PHP interprets it as:
return ($a == 1 ? 'one'
     : $a == 2) ? 'two'
                : 'other';
