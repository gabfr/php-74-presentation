<?php

// The correct way would be to use generic types:

interface Event { }
class SpecificEvent implements Event { }

interface EventHandler <E: Event> {
    public function handle(E $e);
}

public function SpecificEventHandler implements EventHandler<SpecificEvent>
{
    public function handle(SpecificEvent $e) {}
}
