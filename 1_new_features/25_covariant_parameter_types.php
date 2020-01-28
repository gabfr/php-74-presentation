<?php

interface Event { }
class SpecificEvent implements Event {  }

interface EventHandler {
    public function handle(Event $e);
}

class SpecificEventHandler implements EventHandler {
    public function handle(SpecificEvent $e) { }
}

// Unsound, will never work!
// Seems correct, but it's not the right way to go with parameters
