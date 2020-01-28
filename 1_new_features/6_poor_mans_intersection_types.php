<?php

class Test {
    public ?Traversable $traversable;
    public ?Countable $countable;
    public $both = null;
}

$test = new Test;
$test->traversable =& $test->both;
$test->countable =& $test->both;
$test->both = new ArrayIterator; // Effectively ?(Traversable & Countable)
// Because: ArrayIterator <inherits=> Countable
// And also: ArrayIterator <inherits=> SeekableIterator <inherits=> Iterator <inherits=> Traversable
