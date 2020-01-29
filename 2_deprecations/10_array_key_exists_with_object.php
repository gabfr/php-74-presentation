<?php

/*
 * Using array_key_exists() on objects
 *
 * Using array_key_exists() on objects is deprecated. Instead either isset() or property_exists() should be used.
 */

// Don't do:
$obj = new \stdClass;
array_key_exists('foo', $obj);

// Do:
property_exists($obj, 'foo');
