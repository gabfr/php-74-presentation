<?php

// Future: Property accessors

class User {
    public string $name {
        get;
        set ($name) {
            if (strlen($name) == 0)
                throw new Exception('Name cannot be empty');
            $this->name = $name;
        }
    };
}
