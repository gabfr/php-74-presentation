<?php

class A {}
class B extends A {}

class Consumer {
    public function consume(B $value) { }
}

class ChildConsumer extends Consumer {
    public function consume(A $value) { }
}

// Works, but rarely useful
