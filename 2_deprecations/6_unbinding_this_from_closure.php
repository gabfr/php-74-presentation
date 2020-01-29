<?php

/*
 * Unbinding $this when $this is used
 *
 * Unbinding $this of a non-static closure that uses $this is deprecated.
 */

// Don't do:
class A {
    public function foo() {}
    public function method() {
        $this->foo();
    }
}

$closure = (new ReflectionMethod('A', 'method'))->getClosure(new A);
$closure = $closure->bindTo(null, 'A');
$closure();

// Do:
class B {
    public static B $instance;
    public function foo() {}
    public static function method() {
        if (!static::$instance) {
            static::$instance = new B;
        }
        static::$instance->foo();
    }
}

$closure = (new ReflectionMethod('B', 'method'))->getClosure(new A);
$closure = $closure->bindTo(null, 'B');
$closure();
