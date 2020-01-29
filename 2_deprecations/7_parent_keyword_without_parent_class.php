<?php

/*
 * parent keyword without parent class
 *
 * Using parent inside a class without a parent is deprecated, and will throw a compile-time error in the future.
 * Currently an error will only be generated if/when the parent is accessed at run-time.
 */

// Don't do:
class Foo {
    public function bar() : void
    {
        parent::bar();
    }
}

// Do:
class Bar extends Foo {
    public function bar() : void
    {
        parent::bar();
    }
}
