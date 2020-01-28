<?php

$array = new ArrayIterator([3, 4, 5]);
return call(1, 2, ...$array);

return [1, 2, ...$array];
