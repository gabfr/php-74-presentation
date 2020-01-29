<?php

/*
 * The export() methods on all Reflection classes are deprecated.
 * Construct a Reflection object and convert it to string instead:
 */

class Foo {
    public function bar() { }
}

// Don't do:
$str = ReflectionFunction::export('foo');

// Do:
$str = (string) new ReflectionFunction('foo');
