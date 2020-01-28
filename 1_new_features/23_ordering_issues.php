<?php

class A {
    public function method() : B { }
}

class B extends A {
    public function method(): C { }
}

class C extends B { }

// Sound, but class C not available when verifying B.
// => No way to reorder classes "correctly".
// => Will only work with autoloading (for now).
