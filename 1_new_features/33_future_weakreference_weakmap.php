<?php

// People usually like to associate extra data to a object that may happens to be in a week ref
// Usually this approach is used in cache structures
// To keep track of arrays/maps of cache we could do something like below:

// The array key is the object id, which will be reused once object is destroyed
$this->data[spl_object_id($object)] = [WeakReference::create($object), $data];
// Check $checkRef->get() != null
// to know whether the entry is still valid

// The problem with this approach:
// Doesn't keep $object alive, but keeps dead cache entry

// Instead, in the future we may have:

$this->data = new WeakMap();
$this->data[$object] = $data;

// Does not keep $object alive; immediately drops cache entry when object destroyed
