<?php

$i = 0;
$fn = fn() => $i++;
$fn();
var_dump($i); // int(0)
