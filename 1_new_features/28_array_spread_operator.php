<?php

$array = [3, 4, 5];

// You can use the operator on function/method calls:
return call(1, 2, ...$array); // call(1, 2, 3, 4, 5)

// Or in another array:
return [1, 2, ...$array];
