<?php

class User {
    public int $id; // no null default
    public ?string $name; // also no null on default (!)
}

$user = new User;
var_dump($user->name); // Also should throw an error:
// Type property User::$name must not be accessed before initialization
