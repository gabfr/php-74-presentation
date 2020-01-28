<?php

class A { }
class B extends A { }

class Producer {
    public function produce() : A  {}
}

class ChildProducer extends Producer {
    public function produce() : B {}
}

// It works now!
// The parent class returns something more generic
// The child class returns something more specific
