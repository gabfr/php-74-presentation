<?php

$object = new stdClass;
$weakRef = WeakReference::create($object);

var_dump($weakRef->get()); // object(stdClass)#1
unset($object);
var_dump($weakRef->get()); // null
