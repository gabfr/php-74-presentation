<?php

class Test {
    public ?Traversable $traversable;
    public ?Countable $countable;
    public $both = null;
}

$test = new Test;
$test->traversable =& $test->both;
$test->countable =& $test->both;
$test->both = new AppendIterator; // Should throw an error:
// Uncaught TypeError: Cannot assign AppendIterator to reference held by property Test::$countable
// of type ?Countable

// Although we have the inheritation:
//  AppendIterator <inherits=>  IteratorIterator <inherits=> OuterIterator <inherits=> Iterator <inherits=> Traversable
// We don´t have a proper implementation of Countable too
